<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Str;

class BlogResource extends JsonResource
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
            'title' => $this->title,
            'content' => $this->content,
            'except' => Str::limit($this->content, 100),
            'image' => $this->image,
            'slug' => $this->slug,
            'tags' => $this->tags,
            'date' => \Carbon\Carbon::parse($this->created_at)->format('d-m-Y'),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'deleted_at' => $this->deleted_at,
            'status' => $this->status,
            'category' => $this->category,
            'author' => [
                'name' => $this->author->name,
                'email' => $this->author->email,
                'roles' => $this->author->roles->pluck('name') ?? [],
                'avatar' => $this->author->details ? $this->author->details->avatar : null,
                'phone' => $this->author->details ? $this->author->details->phone : null,
                'address' => $this->author->details ? $this->author->details->address : null,
                'bio' => $this->author->details ? $this->author->details->bio : null,
                'social' => $this->author->details ? $this->author->details->social_media : null
            ],
        ];
    }
}
