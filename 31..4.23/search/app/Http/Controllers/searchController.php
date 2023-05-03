<?php

namespace App\Http\Controllers;

use App\Models\Search;
use Illuminate\Http\Request;

class searchController extends Controller
{

    public function getData(Request $request)
    {
        if ($request->ajax()) {
            return datatables()->of(Search::all())->toJson();
        }
        return view('products');
    }




































    public function products(Request $request)

    {
        $products = Search::all();
        return view('products', compact('products'));
    }


    public function addproduct(Request $request)
    {
        dd($request);
        $columns = array(
            0 => 'id',
            1 => 'name',
            2 => 'price',
            3 => 'created_at',
            4 => 'id',
        );

        $totalData = Search::count();

        $totalFiltered = $totalData;
        dd($totalFiltered);
        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');

        if (empty($request->input('search.value'))) {
            $posts = Search::offset($start)
                ->limit($limit)
                ->orderBy($order, $dir)
                ->get();
        } else {
            $search = $request->input('search.value');

            $posts =  Search::where('id', 'LIKE', "%{$search}%")
                ->orWhere('name', 'LIKE', "%{$search}%")
                ->offset($start)
                ->limit($limit)
                ->orderBy($order, $dir)
                ->get();

            $totalFiltered = Search::where('id', 'LIKE', "%{$search}%")
                ->orWhere('name', 'LIKE', "%{$search}%")
                ->count();
        }

        $data = array();
        if (!empty($posts)) {
            foreach ($posts as $post) {
                $show =  route('posts.show', $post->id);
                $edit =  route('posts.edit', $post->id);

                $nestedData['id'] = $post->id;
                $nestedData['name'] = $post->name;
                $nestedData['price'] = substr(strip_tags($post->price), 0, 50) . "...";
                $nestedData['created_at'] = date('j M Y h:i a', strtotime($post->created_at));
                $nestedData['options'] = "&emsp;<a href='{$show}' title='SHOW' ><span class='glyphicon glyphicon-list'></span></a>
                                          &emsp;<a href='{$edit}' title='EDIT' ><span class='glyphicon glyphicon-edit'></span></a>";
                $data[] = $nestedData;
            }
        }

        $json_data = array(
            "draw"            => intval($request->input('draw')),
            "recordsTotal"    => intval($totalData),
            "recordsFiltered" => intval($totalFiltered),
            "data"            => $data
        );

        echo json_encode($json_data);
    }
}
