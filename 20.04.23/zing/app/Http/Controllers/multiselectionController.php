<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;
use App\Models\multipleCategory;

class multiselectionController extends Controller
{
    public function multiview()
    {
        $multicategories = multipleCategory::all();
        $decoded = json_decode($multicategories);

        return view('page.multipage', [" decoded" => $decoded]);
    }

    public function saveMultiSelection(Request $req)
    {

        $categoryName = $req->categoryName;
        $categoryDescription = $req->categoryDescription;
        $categoryPrice = $req->categoryPrice;
        dd($categoryName);

        $productData = [];
        foreach ($categoryName as $key => $list) {
            $products = [];
            $products['name'] = $categoryName;
            $products['description'] = $categoryDescription[$key];
            $products['price'] = $categoryPrice[$key];
            array_push($productData, $products);
        }
        $categories = new multipleCategory();
        $categories->category = $req->categoryOptionName;
        $categories->items = json_encode($productData);
        $categories->save();
        return response()->json([
            "status" => 200,
            "message" => "success"

        ]);
    }
}
