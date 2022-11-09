<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OptionResource extends JsonResource
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
            'value_id' => $this->value_id,
            'parent_id' => $this->parent_id,
            'values' =>  ValueCollection::make($this->whenLoaded('values')),
            'sub_options' => OptionCollection::make($this->whenLoaded('subOptions'))
        ];
    }
}
