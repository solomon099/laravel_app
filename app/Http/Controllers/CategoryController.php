<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function index() {
        return view('back-end.category.index');
    }

    public function create() {
        return view('back-end.category.add');
    }
}