<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    function index()
    {
        //three ways to handle the view
        return view('admin.index');
    }

    function categories()
    {
        $categories = Category::all();
        return view('admin.categories',compact('categories'));
    }

}