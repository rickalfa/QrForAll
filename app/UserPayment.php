<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UserPayment
 *
 * @property $id
 * @property $user_id
 * @property $pay_plataform
 * @property $pay_amount
 * @property $created_at
 * @property $updated_at
 *
 * @property Pay $pay
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class UserPayment extends Model
{
    
    static $rules = [
		'pay_plataform' => 'required',
		'pay_amount' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id','pay_plataform','pay_amount'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function pay()
    {
        return $this->hasOne('App\Pay', 'id_user_payments', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }
    

}
