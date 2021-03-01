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
	 <h3 class=" my-3">Fee submission table</h3>
	 <div class="col-sm-12">
	 <table class="table text-center table-sm table-responsive ">
 
    <tr class="h6">
      <td class="">role No.</td>
      <td class="">Name</td>
      <td class="">Father Name</td>
      <td class="">Class</td>
      <td class="">fee detail</td>
    </tr>
  
  <tbody>
   @if(isset($student))
    <tr >
          <td class="">0{{$student->id}}</td>
      <td class="">{{$student->name}}</td>
      <td class="">{{$student->father_name}}</td>
      <td style="border-right:1px dotted lightgray;" class="">{{$student->studentClass->number}}
       {{$student->studentClass->classType->name}}</td>
      <td>
       <table class="table text-left table-sm table-responsive">  
         
              @foreach ($student->studentFees->where('status','unpaid') as $studentFee)
          <tr>
            <td>{{$studentFee->studentFeeType->name}} fee</td>  
            <td>{{$studentFee->created_at}}</td>  
            <td class="text-danger">{{$studentFee->amount}}/-</td>  
            <td>
              <form method="post" action="{{route('pay.fee',$studentFee->id)}}">
                @csrf
                <input type="hidden" name="studentId" value="{{$student->id}}">
                <input class="btn btn-outline-success" type="submit" name="make paid">
              </form>
            </td>  

          <!--   <a class="btn btn-sm btn-outline-success          href="{{route('pay.fee',$studentFee->id)}}">make paid</a> -->
          </tr>
            @endforeach
       </table>
      </td>
    </tr>
    @endif
    <!-- for name search where variable will be students -->
     @if(isset($students))
  	
  	@foreach($students as $student)
     <tr >
         <td class="">{{$student->id}}</td>
      <td class="">{{$student->name}}</td>
      <td class="">{{$student->father_name}}</td>
      <td style="border-right:1px dotted gray;" class="">{{$student->studentClass->number}}
       {{$student->studentClass->classType->name}}</td>
      <td>
       <table class="table text-left table-sm table-responsive">  
         
              @foreach ($student->studentFees->where('status','unpaid') as $studentFee)
          <tr>
            <td>{{$studentFee->studentFeeType->name}} fee</td>  
            <td>{{$studentFee->created_at}}</td>  
            <td class="text-danger">{{$studentFee->amount}}/-</td>  
            <td>
              <form method="post" action="{{route('pay.fee',$studentFee->id)}}">
                @csrf
                <input type="hidden" name="studentId" value="{{$student->id}}">
                <input class="btn btn-outline-success" type="submit" name="make paid">
              </form>
            </td>   
          </tr>
            @endforeach
       </table>
      </td>
    </tr>@endforeach
    @endif
  </tbody>
</table>
</div>
</div>
@endsection