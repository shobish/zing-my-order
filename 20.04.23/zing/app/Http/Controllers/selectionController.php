<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use Illuminate\Support\Facades\Validator;
use League\CommonMark\Node\Block\Document;

class selectionController extends Controller
{
    public $product = [];
    public $lengthflag = [];


    public function fromDb()
    {
        $data = category::all();
        return view('page.selection', ["data" => $data]);
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

        // dd($product);
        return redirect()->back();
    }
}
