<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SpeederResource extends JsonResource
{


    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {

        return [
            'id' => $this->id,
            'song' => $this->song,
            'desc' => $this->desc,
            'og_speed' => $this->og_speed,
            'cur_speed' => $this->cur_speed,
            'updated_at' => $this->updated_at
        ];
    }
}
