<?php


namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable ;
use Illuminate\Auth\Authenticatable as BasicAuthenticatable;

class subscribes extends Model implements Authenticatable
{

    protected $fillable=['email','password'];

    use BasicAuthenticatable;

    public function messages()
    {
      return $this->hasMany(Message::class)->latest();

    }
    /* @return string
     */
    public function getAuthPassword()
    {
        return $this->password;
    }


}
