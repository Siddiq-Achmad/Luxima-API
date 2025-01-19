<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CommentResource extends JsonResource
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
            'user' => $this->user ? $this->user->name : null,
            'email' => $this->user ? $this->user->email : null,
            'avatar' => $this->user ? $this->user->avatar : null,
            'content' => $this->content,
            'createdAt' => \Carbon\Carbon::parse($this->created_at)->format('d-m-Y H:i:s'),
            'updatedAt' => \Carbon\Carbon::parse($this->updated_at)->format('d-m-Y H:i:s'),
        ];
    }
}
