<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('products.index');
    }

    public function create(){
        return view('products.create');
    }

    public function edit($id){
        return view('products.edit');
    }

    public function show($id){
        return view('products.show');
    }

    public function destroy($id){
        return view('products.index');
    }
}

