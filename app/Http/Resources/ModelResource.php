<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ModelResource extends JsonResource
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
            'name' => $this->name,
            'description' => $this->description,
            'date_of_birth' => $this->date_of_birth,
            'height' => $this->height,
            'shoe_size' => $this->shoe_size,
            'category' => new CategoryResource($this->whenLoaded('category')),
            'picture' => $this->picture,
        ];
    }
}
