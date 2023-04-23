<?php

namespace App\Http\Controllers;

use App\Models\ProductCat;
use App\Models\ProductList;

use Illuminate\Http\Request;


class Dropcontroller extends Controller
{
    // public function index()
    // {
    //     return view('welcome');
    // }
    public function product()
    {
        $datas = ProductCat::all();
        return view('welcome', ['datas' => $datas]);
    }
    public function productList(Request $req)
    {
        $data = ProductList::select('name', 'id')->where('prdtId', $req->id)->take(100)->get();

        return response()->json($data);
    }
    public function productPrice(Request $req)
    {
        $price = ProductList::select('prize')->where('id', $req->id)->first();

        return response()->json($price);
    }
}
