<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ManagementController extends Controller
{
    public function index()
    {
        $items = DB::table('inquirylist')->get();
        return view('management', ['items' => $items]);
    }
    public function edit(Request $request)
    {
        $item = DB::table('inquirylist')->where('id', $request->id)->first();
        return view('management', ['form' => $item]);
    }
    public function update(Request $request)
    {
        $param = [
            'id' => $request->id,
            'name' => $request->name,
            'first_code' => $request->first_code,
            'last_code' => $request->last_code,
            'prefecture' => $request->prefecture,
            'city' => $request->city,
            'address' => $request->address,
            'inquiry_content' => $request->inquiry_content,
        ];
        DB::table('inquirylist')->where('id', $request->id)->update($param);
        return redirect('/');
    }
    public function delete(Request $request)
    {
        $item = DB::table('inquirylist')->where('id', $request->id)->first();
        return view('delete', ['form' => $item]);
    }
    public function remove(Request $request)
    {
        $param = ['id' => $request->id];
        DB::table('inquirylist')->where('id', $request->id)->delete();
        return redirect('/');
    }
}