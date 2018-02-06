<?php
/**
 * Created by PhpStorm.
 * User: mitko
 * Date: 5.2.18
 * Time: 10:36
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Car extends Model
{

    protected $fillable = ['name'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    protected $table = 'cars';
}