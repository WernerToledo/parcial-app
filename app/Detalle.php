<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Detalle
 *
 * @property $id
 * @property $id_ventas
 * @property $descripcion
 * @property $cantidad
 * @property $descuento
 * @property $total_pagar
 * @property $created_at
 * @property $updated_at
 *
 * @property Venta $venta
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Detalle extends Model
{
    
    static $rules = [
		'id_ventas' => 'required',
		'descripcion' => 'required',
		'cantidad' => 'required',
		'descuento' => 'required',
		'total_pagar' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_ventas','descripcion','cantidad','descuento','total_pagar'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function venta()
    {
        return $this->hasOne('App\Venta', 'id', 'id_ventas');
    }
    

}
