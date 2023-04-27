<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\multipleCategory;

class multiselectionController extends Controller
{
    public function multiview()
    {
        $multicategories = multipleCategory::all();
        $decoded = json_decode($multicategories);

        return view('page.multipage', ["categories" => $multicategories]);
    }

    public function saveMultiSelection(Request $req)
    {
        $categoryName = $req->inputName;
        $categoryDescription = $req->inputDescription;
        $categoryPrice = $req->inputPrice;
    }
}
