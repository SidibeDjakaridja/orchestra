<?php

namespace App\Http\Controllers;

use App\Models\Leadership;
use Illuminate\Http\Request;

class LeadershipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        // Logique pour afficher la vue show.blade.php
        return view('leadership.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Leadership $leadership)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Leadership $leadership)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Leadership $leadership)
    {
        //
    }
}