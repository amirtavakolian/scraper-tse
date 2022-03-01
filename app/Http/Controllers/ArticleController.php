<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function show($id)
    {
        echo route('amir', ['id'=>100]);
    }
}
