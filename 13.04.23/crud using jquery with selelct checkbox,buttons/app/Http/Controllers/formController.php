<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;


class formController extends Controller
{
    function view()
    {
        return view('formdata');
    }
}
