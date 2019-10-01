@extends('layouts.app2')

@section('title', 'My Time')

@section('content')
   <div class="container">
<div class="col-md-12">

<div class="row">
                    @if ($Infos->isEmpty())
                        <p>You have not enterted any timings.</p>
                    @else                
               @foreach ($Infos as $Info) 
  <div class="col-sm-3 col-md-3 outisde2">
        <p class="first">Start:{{ $Info->start_time }}</p>
            <p class="second">End:{{ $Info->end_time }}</p>
        
        <p class="third"> <a href="{{ url('dates/'.$Info->id) }}">{{ $Info->driver_name}}</a></p>

         <p class="fourth">Date: {{ $Info->date }}</p>
         <p class="fifth">
           <img class="fifthimg" src="{{URL::asset('Images/design.png')}}">
         </p>

  </div>

            @endforeach
                </div>

            {{ $Infos->render() }}


                  @endif
</div>


</div>

    </div>
    <br>
@endsection