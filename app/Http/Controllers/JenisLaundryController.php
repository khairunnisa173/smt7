<?php

namespace App\Http\Controllers;

use App\Models\jenislaundry;
use Illuminate\Http\Request;

class JenisLaundryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = JenisLaundry::all();

        return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): void
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): void
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(jenislaundry $jenislaundry)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(jenislaundry $jenislaundry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, jenislaundry $jenislaundry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(jenislaundry $jenislaundry)
    {
        //
    }
}
