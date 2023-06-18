<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    function products(){

        //  Question answer============11

        //==========count()=============

        // $totalProducts =DB::table('products')->count();
        // return $totalProducts;

        // $activeUsers = DB::table('products')->where('is_active', true)->count();
        // return $activeUsers;

        //========== sum()==============

        // $totalSum = DB::table('products')->sum('price');
        // return $totalSum;

        //========== avg()==============

        // $averageRating = DB::table('products')->avg('rating');
        // return $averageRating;

        //========== max()==============

        // $maxPrice = DB::table('products')->max('price');
        // return $maxPrice;

        //========== min ()==============

        // $minAge = DB::table('users')->min('age');
        // return $minAge;

        $users = DB::table('products')
        ->whereNot('role', 'admin')
        ->get();
    }
    
}
