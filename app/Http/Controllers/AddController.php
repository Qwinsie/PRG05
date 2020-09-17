<?php

namespace App\Http\Controllers;

use App\NewsItem;
use Illuminate\Http\Request;

class AddController extends Controller
{
    public function show() {
        return view('add');
    }

    public function add() {
    $titlePost = $_POST['title'];

        return view('add',['titlepost' => $titlePost]);

    }

}
