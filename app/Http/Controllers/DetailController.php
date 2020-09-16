<?php

namespace App\Http\Controllers;

use App\NewsItem;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function show() {
        $allItems = NewsItem::all();

        return view('welcome', ['newsitem' => $allItems]);
    }
    public function details($id) {
        $newItem = NewsItem::find($id);

        return view('detail', ['newsitem' => $newItem]);
    }

}
