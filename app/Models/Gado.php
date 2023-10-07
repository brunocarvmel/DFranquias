<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gado extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'gados';

    protected $fillable = [
        'codigo',
        'qtd_leite',
        'qtd_racao',
        'peso',
        'nascimento'
    ];

    public function abate()
    {
        return $this->hasOne(Abate::class, 'id_gado', 'id');
    }


}
