@extends('layouts.app')

@section('content')
<style type="text/css">

	main {
  padding-top: 90px;
}
	.sidebar {
  position: fixed;
  left: 0;
  bottom: 0;
  top: 0;
  z-index: 100;
  padding: 70px 0 0 10px;
  border-right: 1px solid #d3d3d3;
}

.left-sidebar {	
	background-image:  linear-gradient(180deg, #e8e9ea 1%, transparent 100%, transparent), linear-gradient(110.8deg, #66b8ff 50%, gray 51%, #66b8ff);;
  position: sticky;
  top:0;
  height: calc(100vh - 70px)
}

.sidebar-nav li .nav-link {
  color:#333;
  font-weight: 500;
}
.sidebar-nav li .nav-link:hover {
  color:#333;
  font-weight: 600;
  font-size: 20px;
  background-color: #e8e9ea
}

</style>
<nav class="navbar fixed-top  flex-md-nowrap navbar-expand-lg navbar-light bg-light shadow" style=" 
">
  <div class="container">
  <a class="navbar-brand" href="#">
             <img src="{{asset('webimg/logo.jpg')}}" height="50">

  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav mr-auto">
          
       
        
      </ul>

   
     <ul class="navbar-nav ml-auto" >
                <!-- Authentication Links -->

                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">

                            <a class="nav-link" href="{{ route('login') }}"><button class="btn btn-outline-primary"> login</button></a>
                        </li>
                    @endif
                    
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link"  href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class=" nav-item dropdown">
                        <a id="navbarDropdown" class=" nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <button class="btn btn-primary">logout</button>
                            
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
                          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Main menu
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            	@include('layouts.items')
          </div>
        </li>
            </ul>
  </div>
  </div>
</nav>
<div class="container-fluid">
  <div class="row">
    <!-- Sidear -->
    <div class="col-md-2 bg-light d-none d-md-block sidebar shadow">
	 	 <div class=" left-sidebar pt-5">
            	@include('layouts.items')
	  		
	 	</div>
	</div>
	<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
		<div class="container">
		@yield('dashboardContent')
		</div>
	</main>

  </div>
</div>





        

       
   
@endsection