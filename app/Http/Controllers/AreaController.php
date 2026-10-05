<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;

class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Management Area";
        $areas = Area::get();

        return view('areas.index', [
            'areas' => $areas,
            'title' => $title
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Tambah Area - LMS ASTRA";

        return view('areas.create', [
            'title' => $title
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedRequest = $request->validate([
            'code' => ['required', 'string', 'unique:areas,code'],
            'name' => ['required', 'string', 'max:255']
        ]);

        Area::create($validatedRequest);

        return redirect()->route('areas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Area $area)
    {
        $title = "Detail Area - LMS ASTRA";

        return view('areas.show', [
            'area' => $area,
            'title' => $title
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Area $area)
    {
        $title = "Edit Area - LMS ASTRA";

        return view('areas.edit', [
            'area' => $area,
            'title' => $title
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Area $area)
    {
        $validatedRequest = $request->validate([
            'code' => ['required', 'string', 'unique:dealers,code,' . $area->id],
            'name' => ['required', 'string', 'max:255']
        ]);

        $area->update($validatedRequest);

        return redirect()->route('areas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Area $area, Request $request)
    {
        $area->delete();

        return redirect()->route('areas.index');
    }
}
