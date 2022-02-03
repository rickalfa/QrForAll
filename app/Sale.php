<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Sale
 *
 * @property $id
 * @property $name_seller
 * @property $name_bussines
 * @property $iva
 * @property $amount_service_contract
 * @property $pay_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Pay $pay
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Sale extends Model
{
    
    static $rules = [
		'name_seller' => 'required',
		'name_bussines' => 'required',
		'iva' => 'required',
		'amount_service_contract' => 'required',
		'pay_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name_seller','name_bussines','iva','amount_service_contract','pay_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function pay()
    {
        return $this->hasOne('App\Pay', 'id', 'pay_id');
    }
    

}
