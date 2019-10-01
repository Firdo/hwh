<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\driver_time;

use Carbon\Carbon;


use Auth;


class driver_timeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $driver_time= new driver_time([

            'user_name'   => Auth::user()->name,
          'user_date'=> $request->input('user_date'),
          'user_start'=> $request->input('user_start'),
          'user_end'=> $request->input('user_end')
        ]);

        $driver_time->save();

        return redirect()->back()->with("status", "Successfully Updated");
    }



    public function userTickets()
{
    $userTimes = driver_time::where('user_name', Auth::user()->name)->paginate(10);

   

    return view('driverTime', compact('userTimes',));
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
