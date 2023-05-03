<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\multipleCategory;
use Illuminate\Support\Facades\Validator;


class multiselectionController extends Controller
{
    function viewdatabase()

    {
        $usertable = multipleCategory::all();
        return view('welcome', ['usertable' => $usertable]);
    }
    public function saveMultiSelection(Request $req)
    {
        $category = $req->categoryoption;
        $categoryName = $req->categoryname;
        $categoryDescription = $req->categorydescription;
        $categoryPrice = $req->categoryprice;

        // $categoryData = [];
        $productData = [];
        // foreach ($category as $key => $categoryoption) {
        //     $option = [];
        //     $option['categoryOptionName'] = $categoryoption;
        //     array_push($categoryData, $option);
        // }
        foreach ($categoryName as $key => $list) {
            $products = [];
            $products['name'] = $list;
            $products['description'] = $categoryDescription[$key];
            $products['price'] = $categoryPrice[$key];
            array_push($productData, $products);
        }



        $categories = new multipleCategory();
        $categories->category = json_encode($category);
        $categories->items = json_encode($productData);
        $categories->save();
        return redirect()->back();
    }
}
