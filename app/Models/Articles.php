<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Resources\ArticleResource;


class Articles extends Model
{
    use HasFactory;
    protected $fillable = ['title','body'];



    // public function setresource($data){
    //     return new ArticleResource($data);

    // }
}
