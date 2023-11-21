<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    use HasFactory,HasUuids;

    protected $table = 'prodis';

    protected $fillable = ['nama', 'falkutas_id'];


    public function falkutas(){
        return $this->belongsTo(Falkutas::class, 'falkutas_id');
    }
}
