<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Mail
 *
 * @property $id
 * @property $destinatario
 * @property $asunto
 * @property $mensaje
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Mail extends Model
{
    
    static $rules = [
		'destinatario' => 'required',
		'asunto' => 'required',
		'mensaje' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['destinatario','asunto','mensaje'];



}
