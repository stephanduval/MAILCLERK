<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{

    // created using the terminal command: php artisan make:controller IndexController
    public function index()
    {
        // return "index";
        return inertia('Index/Index');
    }
    public function show()
    {
        // return "Show";
        return inertia('Index/Show');
    }
}
