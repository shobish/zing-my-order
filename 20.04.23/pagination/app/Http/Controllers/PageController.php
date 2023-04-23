<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PageModel;

class PageController extends Controller
{
    function page()
    {
        $data = PageModel::paginate(3);
        return view('welcome', ['data' => $data]);
    }
    function paginate(Request $req)
    {

        $data = PageModel::paginate(2);
        return view('welcome', ['data' => $data])->render();
    }
}
