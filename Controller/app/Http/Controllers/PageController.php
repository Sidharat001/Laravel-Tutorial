<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function __invoke() {
        // return view("index");
        return "Index Page";
    }

    public function displayControllerpPage() {
        // return view("welcome");
        return "<h1>This is Controller View</h1>";
    }

    public function showPost($id) {
        // return view("index", ['id' => $id]);
        return "<h1>This is Controller View with Post ID:" . $id . "</h1>";
    }
}
