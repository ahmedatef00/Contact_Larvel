<?php

namespace App\Http\Controllers;

use App\Phone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class PhoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 
        // return"ssd";
        $phones = Phone::all();

        return view('phones.index', compact('phones'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('phones.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // return(Auth::user()->id);
        //
        $request->validate([
            'phone'=>'required',
          
          ]);
         
          $phone = new Phone;
          $phone->phone = $request->phone;
        $phone->user_id = Auth::user()->id;


           
          $phone->save();
          return redirect('/phones/create')->with('success', 'Stock has been added');
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

        $phones = Phone::find($id);

        return view('phones.edit', compact('phones'));
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
        $request->validate([
            'phone'=>'required',
          ]);
    
          $phone = Phone::find($id);
          $phone->phone = $request->get('phone');
          $phone->save();
    
          return redirect('/phones')->with('success', 'Stock has been updated');
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
        $phones = Phone::find($id);
     $phones->delete();

     return redirect('/phones')->with('success', 'Stock has been deleted Successfully');
    }
}
