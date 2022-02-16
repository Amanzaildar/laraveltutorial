<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use App\Http\Requests\ArticleRequest;
use App\Http\Resources\ArticleResource;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{

    public function show(){
        $data = Articles::all();
        // return $data;
        return ArticleResource::collection($data);
    }

    public function create(ArticleRequest $request){
        $data = $request->all();
        $res = Articles::insert($data);
        return new ArticleResource($res);
    }
}
