<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProvinceResource;
use App\Models\Province;
use Illuminate\Http\Request;

class ProvinceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $provinces = Province::all();

      if ($provinces->isEmpty()) {
        return new ProvinceResource(false, 'No provinces found.', []);
      }

      return new ProvinceResource(true, 'Provinces fetched successfully.', $provinces);
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
    public function store(Request $request)
    {
      
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
      $province = Province::find($id);
      
      if (!$province) {
        return new ProvinceResource(false, 'No province found.', []);
      }

      return new ProvinceResource(true, 'Province fetched successfully.', $province);
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
      
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
      
    }
}
