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
        $title = "Management Department";
        $departments = Department::get();

        return view('departments.index', [
            'departments' => $departments,
            'title' => $title
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Tambah Department - LMS ASTRA";

        return view('departments.create', [
            'title' => $title
        ]);
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
        $title = "Detail Department - LMS ASTRA";

        return view('departments.show', [
            'department' => $department,
            'title' => $title
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Department $department)
    {
        $title = "Edit Department - LMS ASTRA";

        return view('departments.edit', [
            'department' => $department,
            'title' => $title
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
