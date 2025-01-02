<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AgriculturalResource;
use App\Models\Agricultural;
use Database\Seeders\AgriculturalSeeder;
use Illuminate\Http\Request;

class AgriculturalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $agriculturals = Agricultural::all();

      if ($agriculturals->isEmpty()) {
        return new AgriculturalResource(false, 'No agriculturals found.', []);
      }

      return new AgriculturalResource(true, 'Agriculturals fetched successfully.', $agriculturals);
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
    public function show(string $id)
    {
      $agricultural = Agricultural::find($id);
      
      if (!$agricultural) {
        return new AgriculturalResource(false, 'No agricultural found.', []);
      }

      return new AgriculturalResource(true, 'Agricultural fetched successfully.', $agricultural);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
