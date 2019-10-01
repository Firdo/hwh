@extends('layouts.app1')

@section('title', 'My Time')

@section('content')
   <div class="container">
<div class="col-md-12">

<div class="row">
                    @if ($allInfo->isEmpty())
                        <p>You have not enterted any timings.</p>
                    @else                
                       @foreach ($allInfo as $Info) 

    <div class="col-sm-3 col-md-3 outisde2">
        <p class="first">Start:{{ $Info->start_time }}</p>
            <p class="second">End:{{ $Info->end_time }}</p>
     <p class="third"> <a href="{{ url('date/'.$Info->id) }}">Date : {{ $Info->date}}</a></p>

         <p class="fourth">Handed Over To: {{ $Info->handed_over }}</p>
         <p class="fifth">
           <img class="fifthimg" src="{{URL::asset('Images/design.png')}}">
         </p>
 </div>

            @endforeach
                </div>

            {{ $allInfo->render() }}


                  @endif
</div>


</div>

    </div>
    <br>
@endsection