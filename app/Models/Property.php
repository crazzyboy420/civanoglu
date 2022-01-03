<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Http;

class Property extends Model
{
    use HasFactory;

   // public function media(){
    //    return $this->belongsTo(Media::class,'featured_media_id');
  //  }

    public function locations(){
        return $this->belongsTo(Location::class,'location');
    }
    public function gallery(){
        return $this->hasMany(Media::class,'property_id');
    }
    public function dynmic_price($bdt){
        $currendt_currency = Cookie::get('currency','bdt');
        if ($currendt_currency == 'usd'){
            $get = Http::get('https://freecurrencyapi.net/api/v2/latest?apikey=76c89170-6178-11ec-98f1-5f7ce0abde0a&base_currency=BDT');
            if ($get->successful()){
                $usd = intval($bdt * $get->json()['data']['USD']);
                return $usd;
            }
        }else{
            return $bdt;
        }
    }
}
