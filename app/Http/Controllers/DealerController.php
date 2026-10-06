<?php

namespace App\Http\Controllers;

use App\Models\Dealer;
use Illuminate\Http\Request;

class DealerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Management Dealer";
        $dealers = Dealer::paginate(10);

        return view('dealers.index', [
            'dealers' => $dealers,
            'title' => $title
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Tambah Dealer - LMS ASTRA";

        return view('dealers.create', [
            'title' => $title
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedRequest = $request->validate([
            'code' => ['required', 'string', 'unique:dealers,code'],
            'name' => ['required', 'string', 'max:255']
        ]);

        Dealer::create($validatedRequest);

        return redirect()->route('dealers.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Dealer $dealer)
    {
        $title = "Detail Dealer - LMS ASTRA";

        return view('dealers.show', [
            'dealer' => $dealer,
            'title' => $title
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dealer $dealer)
    {
        $title = "Edit Dealer - LMS ASTRA";

        return view('dealers.edit', [
            'dealer' => $dealer,
            'title' => $title
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dealer $dealer)
    {
        $validatedRequest = $request->validate([
            'code' => ['required', 'string', 'unique:dealers,code,' . $dealer->id],
            'name' => ['required', 'string', 'max:255']
        ]);

        $dealer->update($validatedRequest);

        return redirect()->route('dealers.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Dealer $dealer)
    {
        $dealer->delete();

        return redirect()->route('dealers.index');
    }
}
