<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TestimonialResource extends JsonResource
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
            'name' => $this->user->name,
            'email' => $this->user->email,
            'occupation' => $this->user->details && isset($this->user->details->occupation) ? $this->user->details->occupation : 'Not Provided', // Ambil dari UserDetail
            'quote' => $this->quote,
            'isApproved' => $this->is_approved === 1 ? true : false,
            'createdAt' => $this->created_at
        ];
    }
}
