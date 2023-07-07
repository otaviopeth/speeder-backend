<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateSpeederRequest;
use App\Http\Resources\SpeederResource;
use App\Models\Speeder;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class SpeederController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function __construct(protected Speeder $speeder){


     }
    public function index()
    {
       $data = $this->speeder::where('user_id', Auth::user()->id)->get();
       return SpeederResource::collection($data);
        //return $this->speeder::all();
    }

    

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUpdateSpeederRequest $request)
    {
        $data = $request->validated();
        $speeder = $this->speeder::create($data);
        return $speeder;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $speeder = $this->speeder::findOrFail($id);
        return $speeder;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreUpdateSpeederRequest $request, string $id)
    {
        $speeder = $this->speeder::findOrFail($id);
        $data = $request->validated();
        return $speeder->update($data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $speeder = $this->speeder::findOrFail($id);
        $speeder->delete();
        return response()->json([], Response::HTTP_NO_CONTENT);
    }
}
