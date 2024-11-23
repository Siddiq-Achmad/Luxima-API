<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class VendorResource extends JsonResource
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
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'address' => $this->address,
            'slug' => $this->slug,
            'description' => $this->description,
            'instagram' => $this->instagram,
            'facebook' => $this->facebook,
            'twitter' => $this->twitter,
            'created_at' => $this->created_at,
            'category' => $this->category->name,
            'user' => UserResource::make($this->user),
            'location' => LocationResource::make($this->location),
            'services' => ServiceResource::collection($this->services),
        ];
    }
}
