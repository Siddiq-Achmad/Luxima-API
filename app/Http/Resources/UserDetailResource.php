<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserDetailResource extends JsonResource
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
            'user_id' => $this->user_id,
            'phone' => $this->phone,
            'address' => $this->address,
            'birth_date' => $this->birth_date,
            'gender' => $this->gender,
            'nationality' => $this->nationality,
            'languages' => $this->languages,
            'occupation' => $this->occupation,
            'bio' => $this->bio,
            'bg_image' => $this->bg_image,
            'social_media' => $this->social_media,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'deleted_at' => $this->deleted_at
        ];
    }
}
