<?php

namespace App\Http\Controllers;

use App\Models\Chrip;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class ChripController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index():Response
    // {
    //     //
    //     // return view('chirp.index');
    //     return Response("Hello World");
    // }

     public function index():View
    {
        return view('chirp.index', [
            'chirp' => Chrip::with('user')->latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse
    {
        $validated = $request->validate([
            'message' => 'required|string|max:255',
        ]);
 
        $request->user()->chrip()->create($validated);
        return redirect(route('chirp.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Chrip $chrip)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Chrip $chrip)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Chrip $chrip)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Chrip $chrip)
    {
        //
    }
}
