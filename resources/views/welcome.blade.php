<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>HWH</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
            	overflow:hidden;
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
            img{
            	z-index: 1000;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
   .dot1 {
   position: absolute;
   right: 0;
  height: 100px;
  width: 100px;
  background-color: #12794c;
  
  display: inline-block;
}
    .dot2 {
    position: absolute;
    left: 0;
 height: 100px;
  width: 100px;
  background-color: #fde8e8;
  border-radius: 50%;
 }

 .dot3 {
    position: absolute;
    top: 0;
  height: 0;
  width: 0;	  
  	border-top: 40px solid transparent;
	border-right: 80px solid #ffad00;
	border-bottom: 40px solid transparent;
  display: inline-block;
}

@keyframes dot2{

0% {
transform: translate3d(0px, 0px, 100px);      
    }


100% {
transform: translate3d(150px, -140px, 100px);


    }

}

.dot2{
  animation-duration: 150s;
  animation-iteration-count: infinite;
  animation-name: dot2;
  animation-timing-function: linear;
}

@keyframes dot1{

0% {
transform: rotate(0deg);      
    }


50% {
transform: rotate(180deg);      
    }

100% {
transform: rotate(360deg);      
    }

}

.dot1{
  animation-duration: 10s;
  animation-iteration-count: infinite;
  animation-name: dot1;
  animation-timing-function: linear;
}

@keyframes dot3{

0% {
transform: translate3d(0px, 0px, 50px);      
    }

    50% {
transform: translate3d(-50px, -50px, 20px);     
    }


100% {
transform: translate3d(0px, 0px, 50px);    


    }

}

.dot3{
  animation-duration: 20s;
  animation-iteration-count: infinite;
  animation-name: dot3;
  animation-timing-function: linear;
}

            
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            
                        @endif
                    @endauth
                </div>
            @endif

<span class="dot1"></span>

            <div class="content">
            	   

            	<span class="dot1"></span>

                <div class="title m-b-md">

                	<span class="dot2"></span>
                    <img src="{{('Images/logo.png')}}">

                </div>
 	<span class="dot3"></span>	
           
            </div>
        </div>
    </body>
</html>
