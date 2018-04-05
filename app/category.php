<?php

namespace App;

use App\Image;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    //
    public function images(){

        return $this->hasMany(Image::class);
    }
}
