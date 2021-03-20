<?php


namespace App\Providers;


use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    protected $table = 'division';
    protected $primaryKey = 'code';
    public $incrementing = false;

    public function branch()
    {
        return $this->belongsTo('App\Branch', 'br_code');
    }

    public function projects()
    {
        return $this->hasMany('App\Project', 'dvs_code', 'code');
    }

    public function users()
    {
        return $this->hasMany('App\Profile', 'dvs_code', 'code');
    }

}