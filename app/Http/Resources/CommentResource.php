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
            'content' => $this->content,
            'user' => $this->user ? $this->user->only(['name', 'email']) : null,
            'created_at' => \Carbon\Carbon::parse($this->created_at)->format('d-m-Y H:i:s'),
            'updated_at' => \Carbon\Carbon::parse($this->updated_at)->format('d-m-Y H:i:s'),
        ];
    }
}
