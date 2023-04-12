<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ajax;

class ajaxController extends Controller
{

    public function view()

    {
        $data = ajax::all();
        return view('form', ['data' => $data]);
    }

    public function add(Request $req)
    {

        $student = new ajax();
        $student->name = $req->name;
        $student->email = $req->email;
        $student->address = $req->address;
        $student->save();
        return response()->json(['message' => 'sucess']);
    }
}
