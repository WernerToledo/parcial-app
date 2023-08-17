<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pago
 *
 * @property $id
 * @property $id_ventas
 * @property $descripcion
 * @property $cantidad
 * @property $descuento
 * @property $monto_cuota
 * @property $pago_cuota
 * @property $total_pagar
 * @property $created_at
 * @property $updated_at
 *
 * @property Venta $venta
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Pago extends Model
{
    
    static $rules = [
		'id_ventas' => 'required',
		'descripcion' => 'required',
		'cantidad' => 'required',
		'descuento' => 'required',
		'monto_cuota' => 'required',
		'pago_cuota' => 'required',
		'total_pagar' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_ventas','descripcion','cantidad','descuento','monto_cuota','pago_cuota','total_pagar'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function venta()
    {
        return $this->hasOne('App\Models\Venta', 'id', 'id_ventas');
    }
    

}
