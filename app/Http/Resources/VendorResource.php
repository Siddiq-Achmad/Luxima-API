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
                'slug' => $this->slug,
                'name' => $this->name,
                'address' => $this->address,
                'rating' => $this->rating,
                'reviewCount' => $this->review_count,
                'description' => $this->description,
                'image' => $this->image,
                'isFeatured' => $this->is_featured,
                'verified' => $this->verified,
                'isActive' => $this->is_active,
                'gallery' => $this->gallery,
                'tags' => $this->tags ? $this->tags->pluck('name') : [],
                'owner' => $this->owner,
                'contact' => $this->contact,
                'social' => $this->social,
                'workingHours' => $this->working_hours,
                'coordinates' => $this->coordinates,
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
                'slug' => $this->slug,
                'name' => $this->name,
                'address' => $this->address,
                'rating' => $this->rating,
                'reviewCount' => $this->review_count,
                'description' => $this->description,
                'image' => $this->image,
                'isFeatured' => $this->is_featured,
                'verified' => $this->verified,
                'isActive' => $this->is_active,
                'gallery' => $this->gallery,
                'tags' => $this->tags ? $this->tags->pluck('name') : [],
                'owner' => $this->owner,
                'contact' => $this->contact,
                'social' => $this->social,
                'workingHours' => $this->working_hours,
                'coordinates' => $this->coordinates,
                'verified' => $this->verified,
                'created_at' => $this->created_at,
                'category' => $this->category->name,
                'user' => UserResource::make($this->user),
                'location' => $this->location->city . ', ' . $this->location->state,
                'services' => ServiceResource::collection($this->services),


            ];
        }

        return parent::toArray($request);
    }
}
