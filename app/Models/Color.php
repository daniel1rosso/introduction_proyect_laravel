<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class Color
 * @package App\Models
 * @version September 3, 2021, 3:14 pm UTC
 *
 */
class Color extends Model
{


    public $table = 'colors';
    



    public $fillable = [
        
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre'=>'string|min:2'
    ];

    
}
