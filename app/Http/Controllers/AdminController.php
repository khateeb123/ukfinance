<?php

namespace App\Http\Controllers;

use App\models\StudentFeeType;
use App\Models\StudentClass;
use App\Models\ClassType;
use App\Models\Student;
use App\Models\Salary;
use App\Models\Expenses;
use App\Models\StudentFee;
use Illuminate\Http\Request;

class AdminController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome'); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function dashboard()
    {

     $unpaidFeesCount = StudentFee::where('status','unpaid')->pluck('amount')->count();
     $collectedFees = StudentFee::where('status','paid')->pluck('amount')->sum();
     $totalFees = StudentFee::all()->pluck('amount')->sum();
     $totalExpence = Expenses::all()->pluck('amount')->sum();
     $paidExpence  = Expenses::where('status','paid')->pluck('amount')->sum();
     $totalSalaries = Salary::all()->pluck('amount')->sum();
     $paidSalaries = Salary::where('status','paid')->pluck('amount')->sum();

     $totalPaid = $paidExpence + $paidSalaries ;
     $totalexpenceWithSalaries = $totalExpence + $totalSalaries;

     $expectedNetCash = $totalFees - $totalexpenceWithSalaries ;

     $cashInHand = $collectedFees - $totalPaid ;
     
     if($totalExpence)
     {
        $eDigree = ( $paidExpence / $totalexpenceWithSalaries) * 180;

     }else{
        $eDigree=0;
     }

     if ($totalFees) 
     {
        $fDigree = ( $collectedFees / $totalFees) * 180;
     }else{
        $fDigree=0;
     }

      if ($expectedNetCash) 
     {
        $cDigree = ( $cashInHand / $expectedNetCash) * 180;
     }else{
        $cDigree=0;
     }
     


        return view('dashboard',compact( 'cDigree','collectedFees','totalFees', 'fDigree','eDigree','unpaidFeesCount','totalPaid','cashInHand','expectedNetCash','totalexpenceWithSalaries'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }
    
  /**
     * Display the specified resource.
     *
     * @param  \App\Models\Expenses  $expenses
     * @return \Illuminate\Http\Response
     */
    public function unpaidFees(){

    $fees = StudentFee::where('status','unpaid')->latest('updated_at')->get() ;

        return view('feelist',compact('fees'));
    }
     /**
     * Display the specified resource.
     *
     * @param  \App\Models\Expenses  $expenses
     * @return \Illuminate\Http\Response
     */
 public function viewClassTypes(){

   $classTypes = ClassType::all();

        return view('classes',compact('classTypes'));
    }

    /**viewClasses
     * Display the specified resource.
     *
     * @param  \App\Models\Expenses  $expenses
     * @return \Illuminate\Http\Response
     */
    public function show(Expenses $expenses)
    {
        return view('collect');
    }
        public function find(Request $request)
    {
            if($request->id)
            {
              $student =  Student::find($request->id);
               return view('collect')->with('student',$student);
            }elseif($request->name)             {
               
        $students =Student::where('name','LIKE','%'.$request->name.'%')->get();


            }

        return view('collect',compact('students'));
    }
      /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Expenses  $expenses
     * @return \Illuminate\Http\Response
     */

    public function payFee(Request $request,StudentFee $studentFee)
    {

    $studentFee->status = 'paid';
    $studentFee->save();
    return redirect()->route('student.fee',$request->studentId);
    }
     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Expenses  $expenses
     * @return \Illuminate\Http\Response
     */

    public function studentFee(Student $student){

        return view('collect',compact('student'));
    }
      /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Expenses  $expenses
     * @return \Illuminate\Http\Response
     */
   public function registration()
    {
       $classTypes =  ClassType::all();
        return view('registration',compact('classTypes'));
    }
     /**
     * Update the specified resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Expenses  $expenses
     * @return \Illuminate\Http\Response
     */
     public function registrationStore(Request $request)
    {
     $studentClassId =  StudentClass::where([
        'class_type_id'=>$request->class_type,
        'number'       =>$request->class
    ])->first()->id;

        $student =  Student::create([
            'student_class_id' => $studentClassId,
            'name' => $request->name,
            'father_name' => $request->father_name,
            'contact' => $request->contact,
            'birth_date' => $request->birth_date,
            'gender' => $request->gender,
            'monthly_fee' => $request->monthly_fee,

        ]);


       
        if($request->monthly_fee_paid){
            $monthlyFeeId = StudentFeeType::where('name','monthly')->first()->id;
             $monthlyFee = $student->studentFees()->create([
                'student_fee_type_id' => $monthlyFeeId,
                'amount' => $student->monthly_fee,
                'status' => 'paid'
                ]);
        }else{
              $monthlyFeeId = StudentFeeType::where('name','monthly')->first()->id;
             $monthlyFee = $student->studentFees()->create([
                'student_fee_type_id' => $monthlyFeeId,
                'amount' => $student->monthly_fee,
                'status' => 'unpaid'
                ]);
        }

        if($request->registration_fee_amount > 0 ){
            if($request->registration_fee_paid){
                $registrationFeeId =StudentFeeType::where('name','registration')->first()->id;
             $registrationFee = $student->studentFees()->create([
                'student_fee_type_id' => $registrationFeeId,
                'amount' => $request->registration_fee_amount,
                'status' => 'paid'
                ]);
            }else{
                 $registrationFeeId =StudentFeeType::where('name','registration')->first()->id;
             $registrationFee = $student->studentFees()->create([
                'student_fee_type_id' => $registrationFeeId,
                'amount' => $request->registration_fee_amount,
                'status' => 'unpaid'
                ]);
            }
    
        }

            return back();
       }
     /**
     * Update the specified resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Expenses  $expenses
     * @return \Illuminate\Http\Response
     */


    
    public function edit(Expenses $expenses)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Expenses  $expenses
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Expenses $expenses)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Expenses  $expenses
     * @return \Illuminate\Http\Response
     */
    public function destroy(Expenses $expenses)
    {
        //
    }
}
