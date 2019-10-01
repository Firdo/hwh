@extends('layouts.app1')

@section('title', 'My Time')

@section('content')
   <div class="container">
    <div class="row">
          <div class="container">
        <div class="col-md-12 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <p class="timing"> Driver's Timing: </p>

                </div> 
                           <a class="arrow" href="{{url('/showtiming')}}"><i class=" fa fa-caret-left"></i> Back</a>

                <div class="panel-body">
                   
                                      <table class="table">
                            <thead>
                                <tr>
                                   
                                    
                                </tr>
                            </thead>
                            <tbody>                            
                                <tr>
                                     <th>Name</th>
                                     <td>
                                        {{ $invoice->driver_name }} 
                                    </td>
                                </tr>
                                       <tr>
                                     <th>Date</th>
                                     <td>
                                        {{ $invoice->date }} 
                                    </td>
                                </tr>
                                       <tr>
                                     <th>Starting Place</th>
                                     <td>
                                        {{ $invoice->starting_place }} 
                                    </td>
                                </tr>
                                <tr>
                                     <th>Starting Time</th>
                                     <td>
                                        {{ $invoice->start_time }} 
                                    </td>
                                </tr>
                                       <tr>
                                     <th>Ending Time</th>
                                     <td>
                                        {{ $invoice->end_time }} 
                                    </td>
                                </tr>
                                       <tr>
                                     <th>Vehicle Name</th>
                                     <td>
                                        {{ $invoice->vehicle_name }} 
                                    </td>
                                </tr>
                                     <tr>
                                     <th>Ending Place</th>
                                     <td>
                                        {{ $invoice->end_place }} 
                                    </td>
                                </tr>
                                       <tr>
                                     <th>Vehicle Time</th>
                                     <td>
                                        {{ $invoice->vehicle_time }} 
                                    </td>
                                </tr>
                                       <tr>
                                     <th>handed Over To</th>
                                     <td>
                                        {{ $invoice->handed_over }} 
                                    </td>
                                </tr>
                                  <tr>
                                     <th>Petrol</th>
                                     <td>
                                        {{ $invoice->petrol }} 
                                    </td>
                                </tr>
                            
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection