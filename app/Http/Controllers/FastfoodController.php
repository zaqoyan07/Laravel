<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fastfood;
use Illuminate\Support\Facades\Auth;

class FastfoodController extends Controller
{
    public function __construct()
    {   
        $this->middleware('auth');
        $this->middleware(function ($request, $next) {
             if (Auth::user()->role != "admin") {
                abort("404");
             }

            return $next($request);
        });
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fastfoods = Fastfood::all()->toarray();
        return view('admin/fastfoods/index',[ 'fastfoods' => $fastfoods]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/fastfoods/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = [
            'title' => $request->input('title'),
            'image' => $request->input('image'),
            'description' => $request->input('description'),
            'size' => $request->input('size'),
            'price' => $request->input('price'),
        ];
         if(Fastfood::insert($data)){
            return redirect()->route('fastfoods');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fastfoods = Fastfood::find($id)->toarray();
        return view('admin/fastfoods/edit',['fastfoods' => $fastfoods]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {   
        $id = $request->input('id');
        $data = [
            'title' => $request->input('title'),
            'image' => $request->input('image'),
            'description' => $request->input('description'),
            'size' => $request->input('size'),
            'price' => $request->input('price'),
        ];
        Fastfood::find($id)->update($data);
        return redirect()->route('fastfoods');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Fastfood::destroy($id);
        return redirect()->route('fastfoods');
    }
}
