@extends('layouts.dashboard')

@section('dashboardContent')

	<h1>welcome to classes</h1>
<div class="row">

@foreach($classTypes as $classType)
<a href="{{route('view.classes',$classType->id)}}">
<button class="btn btn-outline-dark  btn-lg m-4" style="width: 200px">{{$classType->name}}</button>
</a>

@endforeach

</div>
@endsection