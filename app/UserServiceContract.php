<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UserServiceContract
 *
 * @property $id
 * @property $name_service
 * @property $user_id
 * @property $start_service_contract
 * @property $expire_service_contract
 * @property $description
 * @property $created_at
 * @property $updated_at
 *
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class UserServiceContract extends Model
{
    
    static $rules = [
		'name_service' => 'required',
		'start_service_contract' => 'required',
		'expire_service_contract' => 'required',
		'description' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name_service','user_id','start_service_contract','expire_service_contract','description'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }
    

}
