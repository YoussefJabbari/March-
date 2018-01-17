<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marche extends Model
{
    //
    public function fabricants()
    {
        return $this->hasMany('App\Fabricant');
    }

    public function detaillants()
    {
        return $this->hasMany('App\Detaillant');
    }

    public function achats()
    {
        return $this->hasManyThrough('App\Achat', 'App\Fabricant');
    }

    public function ventes()
    {
        return $this->hasManyThrough('App\Vente', 'App\Fabricant');
    }

    public function Fplans()
    {
        return $this->hasManyThrough('App\Plan', 'App\Fabricant');
    }

    public function Dplans()
    {
        return $this->hasManyThrough('App\Plan', 'App\Detaillant');
    }
}
