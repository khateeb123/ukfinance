@extends('layouts.dashboard')

@section('dashboardContent')







<div class="row">
	<form method="POST" action="{{route('collect.search')}}">
		@csrf
		<input type="text" name="name" placeholder="search student by name">
		<input type="number" name="id" placeholder=" search student by id">
		<input type="submit"  name="search" value="search">
	</form>
</div>
<div class="row">	
	 <h3 class=" my-3">Unpaid student list</h3>
	 <div class="col-sm-12">
	 <table class="table text-center table-sm table-responsive ">
 
    <tr class="h6">
      <td class="">role No.</td>
      <td class="">Name</td>
      <td class="">Father Name</td>
      <td class="">Class</td>
      <td class="">Amount</td>
      <td class="">status</td>
      <td class="">date</td>


    </tr>

@foreach($fees as $fee)
    <tr class="h6">
      <td class="">{{$fee->student->id}}</td>
      <td class="">{{$fee->student->name}}</td>
      <td class="">{{$fee->student->father_name}}</td>
      <td class="">{{$fee->student->studentClass->classType->name}} {{$fee->student->studentClass->number}}</td>
      <td class="">{{$fee->amount}}</td>
      <td class="">{{$fee->status}}</td>
      <td class="">{{ $fee->created_at ? $fee->created_at->format('j M, Y'):''}}</td>

    </tr>
@endforeach

</table>
</div>
</div>
@endsection