<?php
namespace app;


use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Post extends Model implements \Illuminate\Contracts\Auth\Authenticatable
{
    use Authenticatable;
    public function user(){
        return $this->belongsTo('App\User');
    }
}