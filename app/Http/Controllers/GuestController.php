<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use Log;

class GuestController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function dashboard(){
        return view('frontend.dashboard');
    }

    public function softDelete(){
        return view('frontend.softdelete');
    }

    public function showDetails(){
        $arr_result = Item::all();
        
        return view('frontend.show-details',compact('arr_result'));
    }
}
