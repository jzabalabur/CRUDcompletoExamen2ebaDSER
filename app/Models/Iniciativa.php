<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

use App\Models\Ordenador;

class Iniciativa extends Model
{
    /** @use HasFactory<\Database\Factories\IniciativaFactory> */
    use HasFactory;
    protected $fillable = [
        'nombre',
        'ordenador_id',
        'numero',
    ];
    protected $guarded = ['id'];

    public function ordenador(): HasOne
    {
        return $this->hasOne(Ordenador::class);
    }

}
