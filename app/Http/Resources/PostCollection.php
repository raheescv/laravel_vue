<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class PostCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function store(Request $request)
    {
      $post = new Post([
        'title' => $request->get('title'),
        'body' => $request->get('body')
      ]);

      $post->save();

      return response()->json('success');
    }
}
