<?php
/**
 * Created by PhpStorm.
 * User: kaFFe
 * Date: 20.04.2018
 * Time: 10:51
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'phone',
        'birthdate',
        'level'
    ];
}