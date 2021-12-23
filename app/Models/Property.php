<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    public function media(){
        return $this->belongsTo(Media::class,'featured_media_id');
    }

    public function locations(){
        return $this->belongsTo(Location::class,'location');
    }
    public function gallery(){
        return $this->hasMany(Media::class,'property_id');
    }
}
