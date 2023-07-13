<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::all();
      return view ('employees.index')->with('employees', $employees);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function create()
    {
        $departments = Department::all();

            return view('employees.create')->with('departments', $departments);;


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = $this->validate($request, [
            'name' => 'required',
            'dept_id' => 'required',
        ]);

       // return response()->json($request->all());

         $input= $request->all();
         Employee::create($input);
            return redirect('employees')->with('flash_message', 'Employee created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
              $employee= Employee::findOrFail($id);
              return view('employees.show')->with('employee', $employee);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
                $employee= Employee::findOrFail($id);
                return view('employees.edit')->with('employee', $employee);
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
                    $employee= Employee::findOrFail($id);
                    $input= $request->all();
                    $employee->update($input);
                    return redirect('employees')->with('flash_message', 'Employee updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
                    $employee= Employee::findOrFail($id);
                    $employee->delete();
                    return redirect('employees')->with('flash_message', 'Employee deleted successfully');
    }
}
