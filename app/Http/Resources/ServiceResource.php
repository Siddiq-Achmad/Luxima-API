<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ServiceResource extends JsonResource
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
            'vendor' => new VendorResource($this->whenLoaded('vendor')),
            'title' => $this->title,
            'description' => $this->description,
            'image' => $this->image,
            'thumbnail' => $this->thumbnail,
            'status' => $this->status,
            'unit' => $this->unit,
            'duration' => $this->duration,
            'price' => $this->price,
            'discount' => $this->discount,
            'discountPrice' => $this->discount_price,
            'views' => $this->views,
            'likes' => $this->likes,
            'dislikes' => $this->dislikes,
            'rating' => $this->rating,
            'reviewCount' => $this->review_count,
            'createdAt' => $this->created_at
        ];
    }
}
