<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Requests\EmployeeUpdateRequests;
use App\Http\Requests\EmployeeStoreRequest;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::all();//where('last_name', 'Цоки')->get()  find([1, 2, 3]) findOrFail([100]);

        return view('employees.index', [
            'allEmployees' => $employees,
            'nameTitle' => 'Служители',
            'message' => '',
            'num' => 1,
            'log' => false
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employees.registerEmployee', [
            'nameTitle' => 'Регистрация'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmployeeStoreRequest $request, Employee $employee)
    {
        //dd($employee);
        $first_name = $request['first_name']; 
        $last_name = $request['last_name'];
        $phone = $request['phone']; 
        $address = $request['address'];
        $job_title = $request['job_title'];   

        if($first_name != '')
        {
            $employee = new Employee;

            $employee->first_name = $first_name;
            $employee->last_name = $last_name;
            $employee->phone = $phone;
            $employee->address = $address;
            $employee->job_title = $job_title;

            $employee->save();

            return view('employees.registerEmployee', [
                'nameTitle' => 'Регистрация'
            ]) . "Регистрацията беше запазена успешно!!!";
        }
        else
        {
            return view('employees.registerEmployee', [
                'nameTitle' => 'Регистрация'
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        return view('employees.edit',[
            'nameTitle' => 'Актуализация',
            'employee' => $employee
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(EmployeeUpdateRequests $request, Employee $employee)
    {
        // dd($employee);

        $phone = $request['phone']; 
        $address = $request['address'];
        $job_title = $request['job_title'];

        $employee->phone = $phone;
        $employee->address = $address;
        $employee->job_title = $job_title;

        $employee->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Employee $employee)
    {
        $employee->delete();

        return redirect()->back();
    }
}
