<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class Article extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return everything
        //return parent::toArray($request);

        // return id, title, body
        return [
            'id' => $this->id,
            'title' => $this->title,
            'body' => $this->body

        ];
    }

    // we can return other stuff in addition to the data object
    public function with($request) {
        return [
            'version' =>'1.0.0',
            'author_url' => url('http://google.pl')
        ];
    }
}
