<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

//Generated By PlantUML Command
class animal extends Model
{
    protected $fillable = [
        'nombre',
        'especies',
        'habitat',
    ];

    public function especies()
    {
        return $this->hasOne(\App\Models\especies);
    }

    public function especies()
    {
        return $this->belongsTo('App\Models\especies');
    }

    public function recinto()
    {
        return $this->belongsTo('App\Models\recinto');
    }

    public function cuidador()
    {
        return $this->belongsTo('App\Models\cuidador');
    }

    public function actividad()
    {
        return $this->belongsTo('App\Models\actividad');
    }

    public function cuidador()
    {
        return $this->belongsTo('App\Models\cuidador');
    }
}
