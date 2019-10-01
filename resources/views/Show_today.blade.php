@extends('layouts.app2')

@section('title', 'My Time')

@section('content')
   <div class="container">
<div class="col-md-12">

<div class="row">
                    @if ($todaydatas->isEmpty())
                        <p>You have not enterted any timings.</p>
                    @else
               @foreach ($todaydatas as $Info) 
  <div class="col-sm-6 col-md-6 outisde">
      
            <div class="image-div">
               @foreach ($users as $user)
                                        @if ($user->name === $Info->driver_name)
                                            
                                      
              <img class="img-fluid" src="{{$user->photo}}">
                @endif
                                        @endforeach
            </div>
            <div class="main-letter">
          <a class="mainname" href="{{ url('dates/'.$Info->id) }}">{{ $Info->driver_name}}</a>
                  
           <p class="adminv">Start:{{ $Info->start_time }}</p>
           <p class="adminv">End:{{ $Info->end_time }}</p>
           <p class="adminv">handed Over To :{{ $Info->handed_over }}</p>
            </div>
          
       

  </div>

            @endforeach
                </div>

            {{ $todaydatas->render() }}


                  @endif
</div>


</div>

    </div>
    <br>
@endsection