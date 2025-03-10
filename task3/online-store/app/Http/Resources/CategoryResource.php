<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return[
              'id'=>$this->id,
              'name'=>$this->name,
              "lft"=>$this->lft,
              'rgt'=>$this->rgt,
               'created_at'=>$this->created_at,
               'updated_at'=>$this->updated_at,
        ];
    }
}
