@extends('layouts.dashboard')

@section('dashboardContent')

	<h1>welcome to classes</h1>
<div class="row">

@foreach($classType as $class)

{{$class}}
@endforeach

</div>
@endsection