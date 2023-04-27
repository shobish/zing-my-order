<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use Illuminate\Support\Facades\Validator;
use League\CommonMark\Extension\CommonMark\Node\Block\ListItem;
use League\CommonMark\Node\Block\Document;

class selectionController extends Controller
{
    public $product = [];
    public $lengthflag = [];


    private function extractName($items)
    {
        $itemsDecoded = json_decode($items, true);

        $names = [];
        foreach ($itemsDecoded as $item) {
            $names[] = $item['name'];
            $description[] = $item['description'];
            $price[] = $item['price'];
        }

        return  $names;
    }
    private function extractdescription($items)
    {
        $itemsDecoded = json_decode($items, true);
        $description = [];
        foreach ($itemsDecoded as $item) {
            $description[] = $item['description'];
        }

        return  $description;
    }
    private function extractprice($items)
    {
        $itemsDecoded = json_decode($items, true);
        $price = [];
        foreach ($itemsDecoded as $item) {
            $price[] = $item['price'];
        }

        return  $price;
    }

    public function fromDb()
    {
        $categories = category::all();
        $formatted = [];
        foreach ($categories as $category) {
            $formatted[] = [
                $category->id,
                $category->category,
                implode(',', $this->extractName($category->items),),
                implode(',', $this->extractdescription($category->items),),
                implode(',', $this->extractprice($category->items),)
            ];
        }


        return view('page.selection', ["formatted" => $formatted]);
    }
    public function addSelection(Request $req)
    {

        $validator = Validator::make($req->all(), [

            "category" => "required",
            "pname" => "required",
            "pdes" => "required",
            "pprice" => "required",

        ]);

        if ($validator->fails()) {
            return response()->json([
                "status" => 400,
                "error" => $validator->messages(),
            ]);
        }
        $name = $req->pname;
        $des = $req->pdes;
        $price = $req->pprice;

        $productList = [];
        foreach ($name as $key => $data) {
            $products = [];
            $products['name'] = $data;
            $products['description'] = $des[$key];
            $products["price"] = $price[$key];
            array_push($productList, $products);
        }

        $document = new category();
        $document->category = $req->category;
        $document->items = json_encode($productList);
        $document->save();
        return response()->json([
            "status" => 200,
            "message" => 'successfully added',
        ]);
    }
    public function deleteItems($id)
    {
        $item = category::find($id);
        $item->delete();
        return response()->json([
            "status" => 200,
            "message" => "deleted successfully"
        ]);
    }
    public function editItems($id)
    {
        $item = category::find($id);
        $items = json_decode($item->items);
        dd($items);
        return view('page.editSelection', ['item' => $item, 'items' => $items]);
    }
    public function updatefunction(Request $req, $id)
    {
        $validator = Validator::make($req->all(), [
            "category" => "required",
            "pname" => "required",
            "pdes" => "required",
            "pprice" => "required",

        ]);

        if ($validator->fails()) {
            return response()->json([
                "status" => 400,
                "error" => $validator->messages(),
            ]);
        } else {
            $name = $req->pname;
            $des = $req->pdes;
            $price = $req->pprice;

            $productList = [];
            foreach ($name as $key => $data) {
                $products = [];
                $products['name'] = $data;
                $products['description'] = $des[$key];
                $products["price"] = $price[$key];
                array_push($productList, $products);
            }

            $document = category::find($id);
            $document->category = $req->category;
            $document->items = json_encode($productList);
            $document->update();
            return response()->json(["status" => 200, 'message' => " User updated Successfully"]);;
        }
    }
}
