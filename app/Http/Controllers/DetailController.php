<?php

namespace App\Http\Controllers;

use App\NewsItem;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function show($id) {

        $post = \DB::table('news_items')->where('id', $id)->first();

//        dd($post);


//        return view('welcome',)
        $allItems = NewsItem::orderBy('created_at', 'desc')->get();

        return view('welcome',
            [
                'newsitem' => $allItems,
                '$post' => $post,
            ]);
    }

    public function details($id) {
        $newItem = NewsItem::find($id);

        return view('detail', ['newsitem' => $newItem]);
    }

}
