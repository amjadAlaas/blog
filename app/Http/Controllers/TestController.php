<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function firstAction () {
        $name = "ahmad";
        $books = ["php", "js", "css"];
        return view('test', ['name' => $name, 'books' => $books]);
    }
    public function greatFun () {
        return "hello from the great function..";
    }
}
