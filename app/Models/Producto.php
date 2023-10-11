<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Relations\HasOne;

class Producto extends Model
{
    use HasFactory;
    protected $table = 'productos';
    protected $primaryKey = 'id';
    protected $fillable = ['nombre', 'descripcion', 'precio', 'cantidad', 'empresa_id'];
    public $timestamps = false;


    

    public function empresa(): HasOne
    {
        return $this->hasOne(Empresa::class, 'id', 'empresa_id');
    }
}
