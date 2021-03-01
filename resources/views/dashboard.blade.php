@extends('layouts.dashboard')

@section('dashboardContent')

<style type="text/css">
  .grid-outer-cover{
    margin:auto;
    position: relative;
    width: 210px;
    overflow: hidden;
  }
  .grid-cover{
    margin:auto;
    position: relative;
    height: 100px;
    width: 200px;
    overflow: hidden;
  }
  
  #grad1 {

position:relative;
 border-radius: 50%;
 display:block;
  width: 200px;
   height: 200px;
  background-color: red; /* For browsers that do not support gradients */
  background-image:  linear-gradient(0, white 50%, transparent 50%, transparent), linear-gradient(110.8deg, #66b8ff 50%, gray 50%, red);;
}
#grad2 {
position:absolute;
margin-top:50px;
margin-left:50px;
 border-radius: 50%;
 display:block;
  width: 100px;
   height: 100px;
  background-color: white; /* For browsers that do not support gradients */
   background-image:  linear-gradient(0, white 50%, transparent 50%, transparent);
  
}
#percentage{
  margin-top: 20%;
  margin-left: 15%;
  position: relative;
}
.t-dark{
  color:#5e7f82;
}
</style>
    <div class="row">

       <div class="col-sm-4">
      <div class="card card-chart t-dark text-center">
          <div class="card-body">
              <h4 class="card-title t-dark my-3">FEE Collection</h4>
              <div class="grid-outer-cover" >
                <div class="grid-cover">
                   <div id="grad1" style="background-image:  linear-gradient(0, white 50%, transparent 50%, transparent), linear-gradient({{$fDigree}}deg,#66b8ff 49%, gray 50%, red 150%);">
                      <div id="grad2">
                          <h3 id="percentage">{{round($fDigree*(100/180))}}%</h3>
                      </div>
                                   
                    </div>
                  </div>
                   <div class="row mt-3 font-weight-bold">
                 
                  <div class="col text-success">{{$collectedFees}}</div>
                  <div class="col">{{$totalFees}}</div>
                  <div class="col">{{$totalFees-$collectedFees}}</div>
                  

                </div> 
                 </div>
               
          </div>
          <div class="card-footer">
            <div class="text-success">
             {{$unpaidFeesCount}} feeses are unpaid ! <a href="{{route('unpaid.fee.list')}}"> View list</a>
            </div>
          </div>
      </div>
   </div>
    
    <div class="col-sm-4">
      <div class="card card-chart t-dark text-center">
          <div class="card-body">
              <h4 class="card-title t-dark my-3">Expences</h4>
              <div class="grid-outer-cover">
              <div class="grid-cover">
                <div id="grad1" style="background-image:  linear-gradient(0, white 50%, transparent 50%, transparent), linear-gradient({{$eDigree}}deg, #66b8ff 49%, gray 50%, red 150%);">
                    <div id="grad2">
                        <h3 id="percentage">{{round($eDigree*(100/180))}}%</h3>
                    </div>
                                 
                  </div>
                </div>
                <div class="mt-3 row font-weight-bold">
                   <div class="col text-success">{{$totalPaid}}</div>
                  <div class="col">{{$totalexpenceWithSalaries}}</div>
                  <div class="col">{{$totalexpenceWithSalaries-$totalPaid}}</div>
              </div> 
              </div>
          </div>
          <div class="card-footer">
            <div class="text-success">
             13 expences are unpaid ! <a href=" #"> View list</a>
            </div>
          </div>
      </div>
   </div>

   <div class="col-sm-4">
      <div class="card card-chart t-dark text-center">
          <div class="card-body">
              <h4 class="card-title t-dark my-3">Hand Cash</h4>
              <div class="grid-outer-cover">
              <div class="grid-cover">
                <div id="grad1" style="background-image:  linear-gradient(0, white 50%, transparent 50%, transparent), linear-gradient({{$cDigree}}deg, #66b8ff 49%, {{ $cDigree> 180 ? 'yellow' : 'gray' }} 50%, #517f82);">


                    <div id="grad2">
                        <h3 id="percentage">{{round($cDigree*(100/180))}}%</h3>
                    </div>
                                 
                  </div>
                </div>
                <div class="mt-3 row font-weight-bold">
                  <div class="col">{{$cashInHand}}</div>
                  <div class="col"> {{$expectedNetCash}}</div>
                  <div class="col">{{$expectedNetCash-$cashInHand}}</div>
                 
                </div> 
                </div>
          </div>
          <div class="card-footer">
            <div class="text-success">
             {{$unpaidFeesCount}} feeses are unpaid ! <a href=" #"> View list</a>
            </div>
          </div>
      </div>
   </div>
 
</div>
      
        
         
@endsection