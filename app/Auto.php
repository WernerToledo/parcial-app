<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Auto
 *
 * @property $id
 * @property $modelo
 * @property $marca
 * @property $anio
 * @property $estado
 * @property $precio
 * @property $created_at
 * @property $updated_at
 *
 * @property Venta[] $ventas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Auto extends Model
{
    
    static $rules = [
		'modelo' => 'required',
		'marca' => 'required',
		'anio' => 'required',
		'estado' => 'required',
		'precio' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['modelo','marca','anio','estado','precio'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ventas()
    {
        return $this->hasMany('App\Venta', 'id_autos', 'id');
    }
    

}
