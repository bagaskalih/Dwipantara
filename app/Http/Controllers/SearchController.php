<?php

namespace App\Http\Controllers;

use App\Models\Search;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SearchController extends Controller
{

    public function search(Request $request)
    {
        if ($request->has('search')) {
            $kota = Search::where('namaKota', 'LIKE', '%'.$request->search.'%')->get();
        } else {
            $kota = Search::get();
        }

        return view('search', ['kota' => $kota]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return view('search', [
        //     "kota" => Search::all()
        // ]);
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
    public function store(StoreSearchRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Search $search)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Search $search)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSearchRequest $request, Search $search)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Search $search)
    {
        //
    }
}
