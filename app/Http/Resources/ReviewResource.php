<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ReviewResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        //return parent::toArray($request);
        return [
            'id' => $this->id,
            'name' => optional($this->user)->name,
            'email' => optional($this->user)->email,
            'avatar' => optional($this->user)->avatar,
            'vendor' => optional($this->vendor)->name,
            'service' => optional($this->service)->title,
            'event' => optional($this->event)->title,
            'rating' => $this->rating,
            'title' => $this->title,
            'content' => $this->content,
            'createdAt' => $this->created_at
        ];
    }
}
