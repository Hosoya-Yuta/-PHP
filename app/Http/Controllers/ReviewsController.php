<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReviewsController extends Controller
{
    public function index(Request $request)
    {
        $items = DB::select('select * from store_reviews');
        return view('home', ['items' => $items]);
    }

    public function test() {

        $test_1 = "テスト";

        return view('test.normal',compact('test_1'));
    }
}
