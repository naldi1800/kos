<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RoomResource extends JsonResource
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
            'size' => $this->size,
            'price' => $this->price,
            'availability' => $this->availability,
            'facilities' => FacilityRoomResource::collection($this->whenLoaded('facilities')),
            'description' => $this->description,
        ];
    }
}
