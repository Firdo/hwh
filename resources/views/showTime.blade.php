@extends('layouts.app2')

@section('title', 'My Time')

@section('content')
   <div class="container">
    <div class="row">
          <div class="container">
        <div class="col-md-12 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <p class="timing"> Driver's Timing:</p>
                </div><br>

                <div class="panel-body">
                    @if ($allInfo->isEmpty())
                        <p>Driver's haven't enterted any timings.</p>
                    @else
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Date</th>
                                    <th>Start Time</th>
                                    <th>End Time</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($allInfo as $info)
                                <tr>

                                     <td>
                                        {{ $info->user_name }} 
                                    </td>
                                    <td>
                                        {{ $info->user_date }} 
                                    </td>
                                    <td>
                                        
                                       {{ $info->user_start }}   
                                        
                                    </td>
                                    <td>
                                    {{ $info->user_end }} 
                                    </td>
                                   
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                   
                    @endif
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection