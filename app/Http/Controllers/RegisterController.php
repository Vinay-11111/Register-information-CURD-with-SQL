<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Registers =DB::table('Registers')->get();
        return view('Register',['Registers'=>$Registers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        DB::table('Registers')->insert([
            'name'=>$request->name,
            'mobile_number'=>$request->mobile_number,
            'email'=>$request->email,
            'password'=>$request->password,
            'Confirm_password'=>$request->Confirm_password,
        ]);
        return redirect(route('index'))->with('status', 'Register added successfully!!');
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
        
        $Register=DB::table('Registers')->find($id);
        return view('Registereditform',['Register'=>$Register]);
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
        DB::table('Registers')->where('id',$id)->update([
            'name'=>$request->name,
            'mobile_number'=>$request->mobile_number,
            'email'=>$request->email,
            'password'=>$request->password,
            'Confirm_password'=>$request->Confirm_password,

        ]);
        return redirect(route('index'))->with('status', 'Register updated successfully!!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('Registers')->where('id',$id)->delete();
        return redirect(route('index'))->with('status', 'Register deleted successfully!!');
    }
}
