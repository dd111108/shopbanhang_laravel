<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index()
    {
        // Điều kiện để ẩn và hiển thị
        $visible_condition = 1;

        $cate_product = DB::table('tbl_category_product')->where('category_status', $visible_condition)->orderby('category_id', 'desc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status', $visible_condition)->orderby('brand_id', 'desc')->get();
        $all_product = DB::table('tbl_product')->where('product_status', $visible_condition)->orderby('product_id', 'desc')->limit(6)->get();

        return view('pages.home')->with('category', $cate_product)->with('brand', $brand_product)->with('all_product', $all_product);

    }
}
