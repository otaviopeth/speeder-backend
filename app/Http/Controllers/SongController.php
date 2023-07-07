<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateSongRequest;
use App\Models\Song;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function __construct(protected Song $song) {
    }
    
    public function index()
    {
        return $this->song::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUpdateSongRequest $request)
    {
        $data = $request->validated();
        $song = $this->song::create($data);
        return $song;
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return $this->song::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreUpdateSongRequest $request, string $id)
    {
       $song = $this->song::findOrFail($id);
       $data = $request->validated();
       return $song->update($data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       $song = $this->song::findOrFail($id);
       $song->delete();
       return response()->json([], Response::HTTP_NO_CONTENT);
    }
}
