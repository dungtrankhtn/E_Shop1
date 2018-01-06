<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        return view('admin.dashboard');
    }

    // Chặn middleware không cho vào các trang khác
    public function grids()
    {
        return view('admin.grids');
    }
    public function portlets(){
        return view('admin.portlets');
    }
    public function buttons(){
        return view('admin.buttons');
    }
    public function typography(){
        return view('admin.typography');
    }

    public function icons(){
        return view('admin.icons');
    }
    public function maps(){
        return view('admin.maps');
    }
    public function charts(){
        return view('admin.charts');
    }
    public function inbox(){
        return view('admin.inbox');
    }
    public function inbox_details(){
        return view('admin.inbox-details');
    }
    public function error404(){
        return view('admin.404');
    }
    public function blank(){
        return view('admin.blank');
    }
    public function price(){
        return view('admin.price');
    }
    public function products()
    {
        return view('admin.product');
    }
}
