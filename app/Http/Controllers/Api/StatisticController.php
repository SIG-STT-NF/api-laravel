<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\StatisticResource;
use App\Models\Statistic;
use Illuminate\Http\Request;

class StatisticController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $statistics = Statistic::all();

      if ($statistics->isEmpty()) {
        return new StatisticResource(false, 'No statistics found.', []);
      }

      return new StatisticResource(true, 'Statistics fetched successfully.', $statistics);
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
      $statistic = Statistic::find($id);
      
      if (!$statistic) {
        return new StatisticResource(false, 'No statistic found.', []);
      }

      return new StatisticResource(true, 'Statistic fetched successfully.', $statistic);
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
