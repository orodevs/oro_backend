<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaruant extends Model
{
    use HasFactory;

    protected $fillable = [
        'logo',
        'name',
        'address',
        'lat',
        'long',
        'alternet_phone',
        'user_id',
    ];

    protected $casts = [
        'logo'=>"string",
        'name'=>"string",
        'address'=>"string",
        'alternet_phone'=>"string",
        'lat'=>"double",
        'long'=>"double",
        'user_id'=>'integer'
    ];

    public function setLogoAttribute($value){
        $this->attributes['logo'] = uploadFile($value,'logo');
    }

    public function getLogoAttribute(){
        dd(getFilePath($this->attributes['logo']));
      return  getFilePath($this->logo);
    }
}
