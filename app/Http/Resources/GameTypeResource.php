<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GameTypeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $user = [
            'id' => $this->id,
            'name' => $this->name,
            'code' => $this->code,
            'image' => $this->img_url,
            'products' => $this->products,
            'hotgame' => $this->gameLists
        ];
        return $user;
    }
}
