<?php

namespace App\Http\Controllers;

use App\Http\Requests\Tariff\StoreRequest;
use App\Http\Requests\Tariff\UpdateRequest;
use App\Http\Resources\Tariff\TariffResource;
use App\Models\Tariff;
use Illuminate\Http\Request;

class TariffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tariffs = Tariff::all();

        return TariffResource::collection($tariffs);
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
    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $tariff = Tariff::create($data);

        return TariffResource::make($tariff);
    }

    /**
     * Display the specified resource.
     */
    public function show(Tariff $tariff)
    {
       return TariffResource::make($tariff);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tariff $tariff)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Tariff $tariff)
    {
       $data = $request->validated();
       $tariff->update($data);
       return TariffResource::make($tariff);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tariff $tariff)
    {
        $tariff->delete();
        return response()->json(['success' => true]);
    }
}
