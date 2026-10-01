<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departments = Department::get();

        return view('departments.index', [
            'departments' => $departments
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('departments.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedRequest = $request->validate([
            'code' => ['required', 'string', 'unique:departments,code'],
            'name' => ['required', 'string', 'max:255']
        ]);

        Department::create($validatedRequest);

        return redirect()->route('departments.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Department $department)
    {
        return view('departments.show', [
            'department' => $department
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Department $department)
    {
        return view('departments.edit', [
            'department' => $department
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Department $department)
    {
        $validatedRequest = $request->validate([
            'code' => ['required', 'string', 'unique:dealers,code,' . $department->id],
            'name' => ['required', 'string', 'max:255']
        ]);

        $department->update($validatedRequest);

        return redirect()->route('departments.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Department $department)
    {
        $department->delete();

        return redirect()->route('departments.index');
    }
}
