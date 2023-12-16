<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TipoGasto
 *
 * @property $id
 * @property $nombre
 *
 * @property Gasto[] $gastos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TipoGasto extends Model
{
    public $timestamps = false;

    static $rules = [
		'nombre' => 'required',
    ];

    protected $perPage = 100;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function gastos()
    {
        return $this->hasMany('App\Models\Gasto', 'id_tipo_gasto', 'id');
    }


}
