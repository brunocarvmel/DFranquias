<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abate extends Model
{
    use HasFactory;

    protected $table = 'abates';

    protected $fillable = [
        'id_gado'
    ];
    
    public function gados(){
        return $this->hasOne(Gado::class, 'id', 'id_gado');
    }
}
