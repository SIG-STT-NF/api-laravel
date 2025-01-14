<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\DistrictResource;
use App\Http\Resources\ProvinceResource;
use App\Models\District;
use Illuminate\Http\Request;

class DistrictController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $districts = District::all();

      if ($districts->isEmpty()) {
        return new DistrictResource(false, 'No districts found.', []);
      }

      return new DistrictResource(true, 'Districts fetched successfully.', $districts);
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
      $district = District::find($id);

      if (!$district) {
        return new ProvinceResource(false, 'No district found.', []);
      }

      return new ProvinceResource(true, 'District fetched successfully.', $district);
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
