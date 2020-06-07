<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Studio extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'studios';

    public function user()
    {
        return $this->belongsToMany('App\User')->withTimestamps();
    }

    public function images()
    {
        return $this->hasMany('App\Image','id_studio');
    }

    public function services()
    {
        return $this->hasMany('App\Service','id_studio');
    }
}
