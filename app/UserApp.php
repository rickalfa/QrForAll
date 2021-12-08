<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UserApp
 *
 * @property $id
 * @property $name
 * @property $email
 * @property $password
 * @property $country
 * @property $address
 * @property $city
 * @property $date_create
 * @property $created_at
 * @property $updated_at
 *
 * @property UserQr[] $userQrs
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class UserApp extends Model
{
  /**
   * Nombre de la tabla
   */
    protected $table = "user_app";
    
    static $rules = [
		'name' => 'required',
		'email' => 'required',
		'country' => 'required',
		'address' => 'required',
		'city' => 'required'
    ];

    protected $perPage = 20;

    

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','email','country','address','city','date_create'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function userQrs()
    {
        return $this->hasMany('App\UserQr', 'owner_user_id', 'id');
    }
    

}
