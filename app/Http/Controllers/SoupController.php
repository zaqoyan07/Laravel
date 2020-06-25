<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Soup;
use Illuminate\Support\Facades\Auth;

class SoupController extends Controller
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
        $soups = Soup::all()->toarray();
        return view('admin/soups/index',[ 'soups' => $soups]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/soups/create');
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
         if(Soup::insert($data)){
            return redirect()->route('soups');
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
        $soups = Soup::find($id)->toarray();
        return view('admin/soups/edit',['soups' => $soups]);
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
        Soup::find($id)->update($data);
        return redirect()->route('soups');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Soup::destroy($id);
        return redirect()->route('soups');
    }
}
