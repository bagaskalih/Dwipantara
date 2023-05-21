<?php

namespace App\Http\Controllers;

use App\Models\Jakarta;
use Illuminate\Routing\Controller;
use App\Http\Requests\StoreJakartaRequest;
use App\Http\Requests\UpdateJakartaRequest;

class JakartaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('review-jakarta', [
            "komentar" => Jakarta::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreJakartaRequest $request)
    {
        $validatedData['comment'] = $request->comment;

        $validatedData['name'] = auth()->user()->name;

        Jakarta::create($validatedData);

        return redirect('/review/jakarta');
    }

    /**
     * Display the specified resource.
     */
    public function show(Jakarta $jakarta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jakarta $jakarta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJakartaRequest $request, Jakarta $jakarta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jakarta $jakarta)
    {
        //
    }
}
