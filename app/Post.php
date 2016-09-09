<?php
namespace app;


use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Post extends Model implements \Illuminate\Contracts\Auth\Authenticatable
{
    use Authenticatable;
    public function posts(){
        return $this->belongsTo('App\User');
    }
}