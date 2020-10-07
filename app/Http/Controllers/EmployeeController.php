<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function login_form()
    {
        return view('auth.login', [
            'nameTitle' => 'Вход'
        ]);
    }

    public function login(Request $request)
    {
        $first_name = $request['first_name'];
        $last_name = $request['last_name'];

        if($first_name != '' && $last_name != '')
        {
            $employees = Employee::where('first_name', $first_name)
            ->where('last_name', $last_name)
            ->get();

            return view('employees.index', [
                'allEmployees' => $employees,
                'nameTitle' => 'Служители',
                'message' => 'Добре дошли ' . $first_name . '!!!',
                'log' => true
            ]);
        }
        else
        {
            return view('auth.login', [
                'nameTitle' => 'Вход'
            ]);
        }
    }
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
        return view('auth.register', [
            'nameTitle' => 'Регистрация'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $first_name = $request['first_name']; 
        $last_name = $request['last_name'];
        $phone = $request['phone']; 
        $address = $request['address'];
        $job_title = $request['job_title'];   

        $employee = new Employee;

        $employee->first_name = $first_name;
        $employee->last_name = $last_name;
        $employee->phone = $phone;
        $employee->address = $address;
        $employee->job_title = $job_title;

        $employee->save();
        return view('auth.register', [
            'nameTitle' => 'Регистрация'
        ]) . "Регистрацията беше запазена успешно!!!";
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
        return view('auth.update',[
            'nameTitle' => 'Актуализация'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        $first_name = $request['first_name'];
        $last_name = $request['last_name'];

        $employees = Employee::where('first_name', $first_name)
        ->where('last_name', $last_name)
        ->get();
        
        $phone = $request['phone']; 
        $address = $request['address'];
        $job_title = $request['job_title'];

        $employee = Employee::find($employees[0]->id);

        $employee->phone = $phone;
        $employee->address = $address;
        $employee->job_title = $job_title;

        $employee->save();

        return view('auth.update',[
            'nameTitle' => 'Актуализация'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        $employee = Employee::find(10);

        $employee->delete();
    }
}