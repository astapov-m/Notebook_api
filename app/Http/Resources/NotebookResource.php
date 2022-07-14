<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class NotebookResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'firm' => FirmResource::make($this->firm),
            'phone' => $this->phone,
            'email' => $this->email,
            'birth_date' => $this->birth_date,
            'image' => $this->image,
            'created_at' => $this->created_at
        ];
    }
}
