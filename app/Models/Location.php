<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:i:s',
        'updated_at' => 'datetime:Y-m-d H:i:s'
    ];

    protected $fillable = [
        'name', 'type', 'address', 'provinsi', 'kota', 'kecamatan', 'kelurahan'
    ];

    public function schedule(){
        return $this->hasMany(Schedule::class)->orderBy('id', 'ASC');
    }

    public function service(){
        return $this->hasMany(Service::class)->orderBy('id', 'ASC');
    }
}
