<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\personal;

class ShowController extends Controller
{
    public function show()
    {
        $data=personal::all();
        return view('home',compact('data'));
    }
    public function search(Request $request)
    {
        $search=$request->input('search');
        $data=personal::query()->where('name','LIKE',"%{$search}%")->get();
        return view('home',compact('data'));
    }
    public function delete($id)
    {
       $data=personal::find($id);
       $data->delete();
       return redirect()->back();
    }
}
