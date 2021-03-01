@extends('layouts.dashboard')

@section('dashboardContent')
admission
<h3>New student admission</h3>

<div class="row">
	<form method="POST" action="{{route('registration.store')}}">
    @csrf


     <div class=" row my-3">
    <div class="col">
           <input type="text" name="name" class="form-control" placeholder="name">
    </div>
    <div class="col">
    <input type="text" name="father_name" class="form-control" placeholder="father name">

    </div>
  </div>

  <div class="row my-3">
    <div class="col">
    <select id="inputState" name="class_type" class="form-control">
        <option selected>Choose...</option>
      @foreach($classTypes as $classType)
        <option value="{{$classType->id}}">{{$classType->name}}</option>
     @endforeach
      </select>
    </div>
    <div class="col">

    <input type="number" name="class" class="form-control" placeholder="class">

    </div>
  </div>

  <div class="row my-3">
    <div class="col">
    <input type="number" name="contact" class="form-control" placeholder="contact N0.">

    </div>
    <div class="col">

    <input type="date" name="birth_date" class="form-control" placeholder="date of birth">

    </div>
  </div>

  <div class="row my-3">
    <div class="col">
    <select id="inputState" name="gender" class="form-control">
        <option selected>Choose...</option>
        <option value="male">male</option>
        <option value="female">female</option>
        <option value="other">other</option>
      </select>
    </div>
    <div class="col">

    <input type="number" name="monthly_fee" class="form-control" placeholder="Rs. monthly fee">

    </div>
    <div class="col">
      
      <input type="number" name="registration_fee_amount" class="form-control" placeholder="Registration fee">
    </div>

  </div>

  <div class="row my-3">
    <div class="col">
            <input  type="checkbox" name="monthly_fee_paid" id="fee">
          <label for="fee">fee is paid ?</label>
    </div>
   
     
      <div class="col">
            <input  type="checkbox" name="registration_fee_paid" id="admission">
          <label for="admission">registration fee is paid ?</label>
    </div>
  </div>       

  <div class="row">
    <input type="submit">
  </div>
  </form>
@endsection