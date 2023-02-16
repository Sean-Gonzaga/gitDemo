<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
   
    public function index()
    {
     
        return view('index',
            [
                'title'     =>  'Products',
                'heading'   =>  'Chips',
                'product' => products::all()
            ]
        );

    }

}
