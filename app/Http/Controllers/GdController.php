<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\general_diary;

class GdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.dashboard.uhome');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.dashboard.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // $gd = general_diary::create($request->all());
        $gd = $request->all();
        $fileName = time().$request->file('product_document')->getClientOriginalName();
        $path = $request->file('product_document')->storeAs('images',$fileName,'public');
        $gd["product_document"] = 'storage/app/public/'.$path;

        $GDno = random_int(100000, 999999);
        $gd["gd_no"] =$GDno; 
   

        $request = general_diary::create($gd);
        return redirect('/user/dashboard');
        
        // return $request->all();
        
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
