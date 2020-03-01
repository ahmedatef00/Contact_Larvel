<?php

namespace App\Http\Controllers;

use App\Http\Requests\Phonerequest;
use App\Phone;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mockery\Matcher\Pattern;

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
// $phones=Auth::user()->phones;  //listing phones from users
// return view('phones.index',['phones'=>$phones]);
// echo $phones;
       return view('phones.index')->with('phones',$phones);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('phones..create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Phonerequest $request   )
    {

        // return(Auth::user()->id);
        //   '/^01[0-2]{1}[0-9]{8}/'

        //php artisan make:request Phonerequest
        // $request->validate([
        //     'phone'=>'numeric|required|digits:10',
        //     // 'phone'=>
          
        //   ]);
        //   $phone = new Phone;
         Auth::user()->phones()->
         
         
         create(

          array('phone' => $request->phone)
         );       //return object user



    //   $phone->user();



           
        //   $phone->save();
          //session in larvel
          return redirect('/phones/create')->with('success', 'phone has been added');
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
    public function edit(Phone $phone)
    {
        //

        // $phones = Phone::find($id);

        return view('phones.edit', compact('phone'));
    
    
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Phone $phone)
    {
        // $phones = Phone::find($id);

        //
        // $request->validate([
        //     'phone'=>'required|numeric',
        //   ]);
    
        //   $phone = Phone::find($id);
        //   $phone->phone = $request->get('phone');
        //   $phone->save();
    
        //   return redirect('/phones')->with('success', 'phone has been updated');
         
     
        $this->authorize('update', $phone);

        $phone->update(

    ['phone' => $request->phone,
        
    ]

);
 
//    return view('phones.edit',compact('phone',$phone))->with('sucess','phone has been updated');
   return redirect('/phones')->with('success', 'phone has been updated');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Phone $phone)
    {
        //
        // $phones = Phone::find($id);
        $this->authorize('delete', $phone);

     $phone->delete();

     return redirect('/phones')->with('success', 'phone has been deleted Successfully');
    }


}
