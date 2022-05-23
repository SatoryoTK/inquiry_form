<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InquiryController extends Controller
{
    public function index()
    {
        $items = DB::select('select * from inquirylist');
        return view('management', ['items' => $items]);
    }
}