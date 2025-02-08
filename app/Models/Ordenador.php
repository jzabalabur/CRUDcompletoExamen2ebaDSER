<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

use App\Models\Iniciativa;

class Ordenador extends Model
{
    /** @use HasFactory<\Database\Factories\OrdenadorFactory> */
    use HasFactory;
    protected $fillable = [
        'nombre',
        'descripcion',
    ];
    protected $guarded = ['id'];

    public function iniciativa(): BelongsToMany
    {
        return $this->belongsToMany(Iniciativa::class);
    }
}
