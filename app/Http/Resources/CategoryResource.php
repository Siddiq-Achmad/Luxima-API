<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\VendorResource;
use Illuminate\Container\Attributes\Storage;

class CategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        //return parent::toArray($request);
        if ($request->route()->getName() === 'categories.index') {
            return [
                'name' => $this->name,
                'slug' => $this->slug,
                'description' => $this->description,
                'image' => $this->image
            ];
        } else if ($request->route()->getName() === 'categories.show' || $request->route()->getName() === 'categories.slug') {
            return [
                'name' => $this->name,
                'slug' => $this->slug,
                'description' => $this->description,
                'status' => $this->status,
                'image' =>  $this->image,
                'meta_title' => $this->meta_title,
                'meta_description' => $this->meta_description,
                'meta_keywords' => $this->meta_keywords,
                'created_at' => $this->created_at,
                'vendors' => VendorResource::collection($this->vendors),
                // 'vendors' => [
                //     'name' => $this->vendors->name,
                //     'email' => $this->vendors->email,
                //     'phone' => $this->vendors->phone,
                //     'address' => $this->vendors->address,
                //     'slug' => $this->vendors->slug,
                //     'description' => $this->vendors->description,
                //     'instagram' => $this->vendors->instagram,
                //     'facebook' => $this->vendors->facebook,
                //     'tiktok' => $this->vendors->tiktok,
                //     'verified' => $this->vendors->verified,
                //     'status' => $this->vendors->status,
                //     'image' => $this->vendors->image,
                //     'user' => [
                //         'name' => $this->vendors->user->name,
                //         'email' => $this->vendors->user->email
                //     ],
                //     'services' => [
                //         'service_name' => $this->vendors->services->service_name,
                //         'description' => $this->vendors->services->description,
                //         'price' => $this->vendors->services->price
                //     ],
                //     'location' => [
                //         'city' => $this->vendors->location->city,
                //         'state' => $this->vendors->location->state,
                //         'country' => $this->vendors->location->country,
                //         'postal_code' => $this->vendors->location->postal_code
                //     ],
                // ],

            ];
        }

        return
            [
                'name' => $this->name,
                'slug' => $this->slug,
                'description' => $this->description,
                'status' => $this->status,
                'image' =>  $this->image,
                'meta_title' => $this->meta_title,
                'meta_description' => $this->meta_description,
                'meta_keywords' => $this->meta_keywords,
            ];
    }
}
