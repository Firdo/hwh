@extends('layouts.app1')

@section('title', 'Open Ticket')

@section('content')

<div class="container makecolor">
    <div class="row">
        <div class="col-md-12">
   
                    @include('flash')


                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/store') }}">
                        {!! csrf_field() !!}

                        <div class="form-group">
                            
                             <div class="col-md-12">
                            <div class="row">
                           

                            <div class="col-md-4">
                                     <label for="date" class="col-md-12 control-label">Date</label>
                              <input id="date" type="Date" class="form-control" name="date" >                           
                            </div>

                                       <div class="col-md-4">
                                       <label for="starting_place" class="col-md-12 control-label">Starting Place</label>   
                                <input id="Customer Mobile" type="text" class="form-control" name="starting_place">

                        </div>        

                          <div class="col-md-4">
                                   <label for="start_time" class="col-md-12 control-label">Start Time</label>
                                  <input id="start_time" type="time" class="form-control" name="start_time" value="{{ old('description_type') }}">                            
                            </div>       
                   </div>
                </div>
</div>  



                        <div class="form-group">
                            
                             <div class="col-md-12">
                            <div class="row">
                          

                            <div class="col-md-4">
                                       <label for="end_time" class="col-md-12 control-label">End Time</label>
                                   <input id="end_time" type="Time" class="form-control" name="end_time">                           
                            </div>

                                       <div class="col-md-4">
                                        <label for="end_place" class="col-md-12 control-label">End Place</label>   
                                 <input id="end_place" type="text" class="form-control" name="end_place">


                        </div>

                       <div class="col-md-4">
                                   <label for="vehicle_name" class="col-md-12 control-label">Vehicle Name</label>
                                  
                                    <select id="vehicle_name" type="text
                                " class="form-control" name="vehicle_name">
                                    <option value="">Select Vehicle Name</option>
                                    @foreach ($vehicle_names as $vehicle)
                        <option value="{{ $vehicle->name }}">{{ $vehicle->name }}</option>
                                    @endforeach
                                  </select>                            
                            </div>

                </div>
                    </div>
                </div>


 <div class="form-group">
 <div class="col-md-12">
                            <div class="row">

                                                       <div class="col-md-4">
                                        <label for="handed_over" class="col-md-12 control-label">Handed Over To</label>   
                                 
                                  <select id="handed_over" type="text
                                " class="form-control" name="handed_over">
                                    <option value="">Select Driver Name</option>
                                    @foreach ($driver_name as $names)
                        <option value="{{ $names->name }}">{{ $names->name }}</option>
                                    @endforeach
                                  </select>


                        </div>
                      

                            <div class="col-md-8">
                                       <label for="vehicle_time" class="col-md-12 control-label">Vehicle Used Time</label>
                                   <input id="vehicle_time" type="text" class="form-control" name="vehicle_time" >                           
                            </div>

                

                 </div>
                
                    </div>
                </div>

                <div class="form-group">
 <div class="col-md-12">
  <div class="row">
<div class="col-md-4">
   <input type="radio" name="petrol" value="Filled"> Petrol Filled 
  <input type="radio" name="petrol" value="Not Filled"> Not Filled  
</div>
   </div>
</div>
</div>                                                  
                    
                   <div class="row butt">
                    <div class="col-md-3"></div>
    <div class="col-md-6 col-lg-6">
      <button type="submit" class="btn btn-primary btn-block">Submit <i class="fa fa-paper-plane"></i></button>
    </div>
  </div>
                    </div>
            
        </form>
    </div>
 </div>
</div>
@endsection