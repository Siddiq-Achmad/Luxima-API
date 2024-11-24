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
        if ($request->route()->getName() === 'vendors.index' || $request->route()->getName() === 'vendors.slug' || $request->route()->getName() === 'vendors.search') {
            return [
                'name' => $this->name,
                'email' => $this->email,
                'phone' => $this->phone,
                'address' => $this->address,
                'slug' => $this->slug,
                'description' => $this->description,
                'instagram' => $this->instagram,
                'facebook' => $this->facebook,
                'tiktok' => $this->tiktok,
                'image' => $this->image,
                'status' => $this->status,
                'verified' => $this->verified,
                'created_at' => $this->created_at,
                'category' => $this->category->name,
                'meta' => [
                    'title' => $this->category->meta_title,
                    'description' => $this->category->meta_description,
                    'keywords' => $this->category->meta_keywords,
                ],
                'location' => $this->location->city . ', ' . $this->location->state
            ];
        } else if ($request->route()->getName() === 'vendors.show') {
            return [
                'name' => $this->name,
                'email' => $this->email,
                'phone' => $this->phone,
                'address' => $this->address,
                'slug' => $this->slug,
                'description' => $this->description,
                'instagram' => $this->instagram,
                'facebook' => $this->facebook,
                'tiktok' => $this->tiktok,
                'image' => $this->image,
                'status' => $this->status,
                'verified' => $this->verified,
                'created_at' => $this->created_at,
                'category' => CategoryResource::make($this->category),
                'user' => UserResource::make($this->user),
                'location' => LocationResource::make($this->location),
                'services' => ServiceResource::collection($this->services),
            ];
        }

        return parent::toArray($request);
    }
}
