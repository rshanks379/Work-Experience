<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Models\Employee;
use App\Models\Position;
use Illuminate\Http\RedirectResponse;

class EmployeeController extends Controller
{
    public function index(Request $request): View
    {
        $employees = Employee::orderBy('name', 'desc')->get();
        return view('employees.index', compact('employees'));
    }

    public function edit($id): View
    {
        $employee = Employee::findOrFail($id);  
        $positions = Position::all();

        return view('employees.edit', compact('employee', 'positions'));

    }

    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'name'=>'required',
            'dob'=>'required'
        ]);

        $post = $request->post();
        $employee = Employee::findOrFail($id);

        unset($post['positions']);

        foreach($post as $key => $value) {
            $employee->$key = $value;
        }

        $employee->save();
        return redirect()->route('employee.index');
    }
    public function indexByName($name): View
    {
        $employees = Employee::where('name', '=', $name)->get();
        return view('employees.index', compact('employees'));
    }

}
