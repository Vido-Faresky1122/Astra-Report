<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Assignment;
use App\Models\Dealer;
use App\Models\Department;
use Illuminate\Http\Request;

class AssignmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Management Assignment";
        $assignments = Assignment::get();
        $departments = Department::get();
        $areas = Area::get();
        $dealers = Dealer::get();

        return view('assignments.index', [
            'assignments' => $assignments,
            'title' => $title,
            'departments' => $departments,
            'dealers' => $dealers,
            'areas' => $areas
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $title = "Tambah Assignment - LMS ASTRA";
        $departments = Department::get();
        $areas = Area::get();
        $dealers = Dealer::get();

        return view('assignments.create', [
            'title' => $title,
            'departments' => $departments,
            'dealers' => $dealers,
            'areas' => $areas
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedRequest = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'department_id' => ['required', 'integer', 'exists:departments,id'],
            'area_id' => ['required', 'integer', 'exists:areas,id'],
            'dealer_id' => ['required', 'integer', 'exists:dealers,id'],
            'due_at' => ['required', 'date', 'after_or_equal:today'],
        ]);

        Assignment::create($validatedRequest);

        return redirect()->route('assignments.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Assignment $assignment)
    {
        $title = "Detail Assignment - LMS ASTRA";
        $department = Department::get();
        $area = Area::get();
        $dealer = Dealer::get();

        return view('assignments.show', [
            'assignment' => $assignment,
            'title' => $title,
            'department' => $department,
            'dealer' => $dealer,
            'area' => $area
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Assignment $assignment)
    {
        $title = "Edit Assignment - LMS ASTRA";
        $departments = Department::get();
        $areas = Area::get();
        $dealers = Dealer::get();

        return view('assignments.edit', [
            'assignment' => $assignment,
            'title' => $title,
            'departments' => $departments,
            'dealers' => $dealers,
            'areas' => $areas
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Assignment $assignment)
    {
        $validatedRequest = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'department_id' => ['required', 'integer', 'exists:departments,id'],
            'area_id' => ['required', 'integer', 'exists:areas,id'],
            'dealer_id' => ['required', 'integer', 'exists:dealers,id'],
            'due_at' => ['required', 'date', 'after_or_equal:today'],
        ]);

        $assignment->update($validatedRequest);

        return redirect()->route('assignments.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Assignment $assignment)
    {
        //
    }

    public function review()
    {
        return view('assignments.review');
    }

    public function submit()
    {
        return view('assignments.submit');
    }
}
