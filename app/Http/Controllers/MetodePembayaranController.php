<?php

namespace App\Http\Controllers;

use App\Models\metodepembayaran;
use Illuminate\Http\Request;

class MetodePembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = MetodePembayaran::all();

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
    public function show(metodepembayaran $metodepembayaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(metodepembayaran $metodepembayaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, metodepembayaran $metodepembayaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(metodepembayaran $metodepembayaran)
    {
        //
    }
}

