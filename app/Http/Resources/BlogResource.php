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
            'excerpt' => Str::limit($this->content, 100),
            'image' => $this->image,
            'slug' => $this->slug,
            'tags' => $this->tags ? $this->tags->pluck('name') : [],
            'date' => \Carbon\Carbon::parse($this->created_at)->format('d-m-Y'),
            'status' => $this->status,
            'category' => $this->category ? $this->category->name : null,
            'author' => [
                'name' => $this->author->name,
                'email' => $this->author->email,
                'avatar' => $this->author->avatar,
                'phone' => $this->author->details ? $this->author->details->phone : null,
                'address' => $this->author->details ? $this->author->details->address : null,
                'bio' => $this->author->details ? $this->author->details->bio : null,
                'roles' => $this->author->roles->pluck('name') ?? [],
                'social' => $this->author->details ? json_decode($this->author->details->social_media) : null
            ],
            'comments' => CommentResource::collection($this->comments),
        ];
    }
}
