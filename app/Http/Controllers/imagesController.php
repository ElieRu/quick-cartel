<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class imagesController extends Controller
{
    public function index()
    {
    }

    public function create(Request $request)
    {
        if ($request->hasFile('image')) {

            $file = $request->file('image');
            $image = $file->store('article-image', 'public');
            
            $getImage = Image::where('article_id', $request->article_id);
            
            if ($getImage->exists()) {
                if ($getImage->get('image')[0]->image == null) {
                    $getImage->delete($getImage->get('id')[0]->id);
                }
            }

            Image::create([
                'image' => $image,
                'default' => !$getImage->exists() ? true : false,
                'article_id' => $request->article_id
            ]);

        }
    }

    public function update()
    {
    }

    public function remove()
    {
    }
}
