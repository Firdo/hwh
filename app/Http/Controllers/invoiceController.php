<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\driver_name;

use App\vehicle_name;

use App\driver_time;

use App\User;

use App\invoice;

use Carbon\Carbon;

use Auth;

class invoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allInfo=invoice::where('driver_name', Auth::user()->name)->orderBy('date', 'desc')->paginate(12);

         return view('driverTime',compact('allInfo'));
    }

        public function showAll()
    {
        $Infos = invoice::orderBy('date','desc')->paginate(12);

         return view('showAll',compact('Infos'));
    }

           public function showToday()
    {
        $todaydatas= invoice::whereDate('date',Carbon::today())->paginate(12);

        $users=user::all();

         return view('show_today',compact('todaydatas', 'users'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $driver_name=driver_name::all();

        $vehicle_names=vehicle_name::all();

        return view('create',compact('driver_name', 'vehicle_names'));
    }


        public function driver_create()
    {
        $driver_name=driver_name::all();

        $vehicle_names=vehicle_name::all();

        return view('driverCreate',compact('driver_name', 'vehicle_names'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */ 
    public function store(Request $request)
    {
  

        $invoice =new invoice([

          'driver_name' =>Auth::user()->name,
          'date' =>$request ->input('date'),
          'starting_place' =>$request ->input('starting_place'),
          'start_time' =>$request ->input('start_time'),
          'end_time' =>$request ->input('end_time'),
          'end_place' =>$request ->input('end_place'),
          'vehicle_name' =>$request ->input('vehicle_name'),
           'vehicle_time' =>$request ->input('vehicle_time'),
          'handed_over' =>$request ->input('handed_over'),
          'petrol' =>$request ->input('petrol')

        ]);

        $invoice->save();   

         return redirect()->back()->with("status", "Successfully Updated");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $invoice=invoice::where('id', $id)->firstOrFail();

        return view('driver_show', compact('invoice'));
    }

        public function showDriver($id)
    {
        $invoice=invoice::where('id', $id)->firstOrFail();

        return view('driver_all', compact('invoice'));
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
