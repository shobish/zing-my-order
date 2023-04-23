<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use Illuminate\Support\Facades\Validator;
use GuzzleHttp\Psr7\Message;

class adminController extends Controller
{
    function view()
    {
        return view('formdata');
    }

    function addUser(Request $req)
    {

        $validator = validator::make($req->all(), [
            "name" => 'required',
            "age" => 'required',
            "hobbies" => 'required',
            "sex" => 'required',
            "class" => 'required',
        ]);
        if ($validator->fails()) {

            return response()->json([
                "status" => 400,
                "error" => $validator->messages(),
            ]);
        } else {
            $user = new Form();
            $user->name = $req->name;
            $user->age = $req->age;
            $user->hobbies = json_encode($req->hobbies);
            $user->sex = $req->sex;
            $user->class = $req->class;
            $user->save();
            return response()->json(["status" => 200, 'message' => "New User Added Successfully"]);
        }
    }
    function list()
    {
        $data = form::all();
        return response()->json([
            "user" => $data,
        ]);
    }

    public function deleteUser($id)
    {
        $user = form::find($id);
        $user->delete();
        return response()->json(['message' => "User deleted Successfully"]);
    }
    public function editUser($id)
    {
        $user = form::find($id);
        if ($user) {
            return response()->json([
                'status' => 200,
                "user" => $user,

            ]);
        } else {
            return response()->json([
                'status' => 404,
                "message" => "not found",

            ]);
        }
    }
    function updateUser(Request $req, $id)
    {
        $validator = validator::make($req->all(), [
            "name" => 'required',
            "age" => 'required',
            "hobbies" => 'required',
            "sex" => 'required',
            "class" => 'required',
        ]);
        if ($validator->fails()) {

            return response()->json([
                "status" => 400,
                "error" => $validator->messages(),
            ]);
        } else {
            $user =  Form::find($id);
            if ($user) {
                $user->name = $req->name;
                $user->age = $req->age;
                $user->hobbies = json_encode($req->hobbies);
                $user->sex = $req->sex;
                $user->class = $req->class;
                $user->update();
                return response()->json(["status" => 200, 'message' => " User updated Successfully"]);
            } else {
                return response()->json([
                    'status' => 404,
                    "message" => "not found",

                ]);
            }
        }
    }
}
