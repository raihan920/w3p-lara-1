<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Employee;    //need to include this globally for binding
use Illuminate\Support\Facades\View;

class employeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //just echoing data
    //    echo $employee->employee_id."<br>".$employee->first_name." ".$employee->last_name."<br>".$employee->email;
        //sending data to a view
        return view('pages.employee-profile', ['employee'=>$employee]);
    }

    public function show_employee($employee_id)
    {
        // return 'Hello World '.$employee_id;
        dd(Employee::findOrFail($employee_id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    //user defined function
    public function getUrlData(Request $request)
    {
        return "Hello {$request->name} are you {$request->age} years old?";
    }

    public function viewName()
    {
        $student = [
            'name'=>'Raihan',
            'age'=>31,
            'email'=>'raihan92@rocketmail.com'
        ];
        //if 'pages.view-using-facade-two' not found got to 'welcome'
        return View::first(['pages.view-using-facade-three','welcome'], $student);
    }

    public function viewNameFacadeFour()
    {
        return View::make('pages.view-using-facade-four');
    }

    public function viewNameFacadeFive()
    {
        return View::make('pages.view-using-facade-five');
    }

    public function viewNameFacadeSix()
    {
        return View::make('pages.view-using-facade-six');
    }
}
