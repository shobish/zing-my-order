<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\selectionModel;
use Illuminate\Support\Facades\Validator;
use League\CommonMark\Node\Block\Document;

class selectionController extends Controller
{
    public function fromDb()
    {
        $data = selectionModel::all();
        return view('page.selection', ["data" => $data]);
    }
    public function addSelection(Request $req)
    {

        $validator = Validator::make($req->all(), [
            "name" => "required",
            "address" => "required",
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
        $document = new selectionModel();
        $document->name = $req->name;
        $document->address = $req->address;
        $document->category = $req->category;
        $document->pname = json_encode($req->pname);
        $document->pdes = json_encode($req->pdes);
        $document->pprice = json_encode($req->pprice);
        $document->save();
        return response()->json(["status" => 200, 'message' => "New User Added Successfully"]);
    }
}
