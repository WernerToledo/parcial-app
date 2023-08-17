<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Venta
 *
 * @property $id
 * @property $id_autos
 * @property $id_clientes
 * @property $fecha_venta
 * @property $tipo_pago
 * @property $created_at
 * @property $updated_at
 *
 * @property Auto $auto
 * @property Cliente $cliente
 * @property Pago[] $pagos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Venta extends Model
{
    
    static $rules = [
		'id_autos' => 'required',
		'id_clientes' => 'required',
		'fecha_venta' => 'required',
		'tipo_pago' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_autos','id_clientes','fecha_venta','tipo_pago'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function auto()
    {
        return $this->hasOne('App\Models\Auto', 'id', 'id_autos');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cliente()
    {
        return $this->hasOne('App\Models\Cliente', 'id', 'id_clientes');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pagos()
    {
        return $this->hasMany('App\Models\Pago', 'id_ventas', 'id');
    }
    

}
