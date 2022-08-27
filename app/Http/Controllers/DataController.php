<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\data;
use Illuminate\Support\Facades\DB;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = DB::table('data')->get();
        return view('welcome',['datas'=>$datas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        DB::table('data')->insert([
            'name' =>$request->name,
            'email'=>$request->email,
        ]);
        return redirect()->back()->with('add','Data inserted...!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $edit = DB::table('data')->find($id);
        return view('edit',['edit'=>$edit]);
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
        DB::table('data')->where('id',$id)->update([
            'name' =>$request->name,
            'email'=>$request->email,
        ]);
        return redirect(route('index'))->with('update','Data Updated...!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('data')->where('id',$id)->delete();
        return redirect('index')->with('delete','Data Deleted...!');

    }
}
// DB::table('catagory')->find('id',$id)->delete();
// return redirect('catagory')->with('delete_catagory','Catagory Deleted...!!!');
