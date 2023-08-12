<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Venta
 *
 * @property $id
 * @property $id_autos
 * @property $id_clientes
 * @property $id_empleados
 * @property $fecha_venta
 * @property $created_at
 * @property $updated_at
 *
 * @property Auto $auto
 * @property Cliente $cliente
 * @property Detalle[] $detalles
 * @property Empleado $empleado
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Venta extends Model
{
    
    static $rules = [
		'id_autos' => 'required',
		'id_clientes' => 'required',
		'id_empleados' => 'required',
		'fecha_venta' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_autos','id_clientes','id_empleados','fecha_venta'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function auto()
    {
        return $this->hasOne('App\Auto', 'id', 'id_autos');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cliente()
    {
        return $this->hasOne('App\Cliente', 'id', 'id_clientes');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function detalles()
    {
        return $this->hasMany('App\Detalle', 'id_ventas', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function empleado()
    {
        return $this->hasOne('App\Empleado', 'id', 'id_empleados');
    }
    

}
