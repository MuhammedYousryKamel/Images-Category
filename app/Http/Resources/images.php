<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class images extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id , 
            'url' => $this->url,
            'like_count' => $this->like_count,
            'unlike_count' => $this->unlike_count,
            'views_count' => $this->views_count



        ];
    }
}
