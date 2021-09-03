<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Car
 *
 * @property $id
 * @property $patente
 * @property $color
 * @property $modelo
 * @property $precio
 * @property $user_id
 * @property $created_at
 * @property $updated_at
 *
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Car extends Model
{
    
    static $rules = [
		'patente' => 'required',
		'color' => 'required',
		'modelo' => 'required',
		'precio' => 'required',
		'user_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['patente','color','modelo','precio','user_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
