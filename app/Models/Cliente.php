<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cliente
 *
 * @property $id
 * @property $nombres
 * @property $apellidos
 * @property $dui
 * @property $residencia
 * @property $telefono
 * @property $nombre_usuario
 * @property $password
 * @property $ingresos
 * @property $created_at
 * @property $updated_at
 *
 * @property Venta[] $ventas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cliente extends Model
{
    
    static $rules = [
		'nombres' => 'required',
		'apellidos' => 'required',
		'dui' => 'required',
		'residencia' => 'required',
		'telefono' => 'required',
		'nombre_usuario' => 'required',
		'ingresos' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombres','apellidos','dui','residencia','telefono','nombre_usuario','ingresos'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ventas()
    {
        return $this->hasMany('App\Models\Venta', 'id_clientes', 'id');
    }
    

}
