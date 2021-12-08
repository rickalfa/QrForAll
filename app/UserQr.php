<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UserQr
 *
 * @property $id
 * @property $url_qr
 * @property $content
 * @property $tags
 * @property $category_type_id
 * @property $owner_user_id
 * @property $date_create
 * @property $created_at
 * @property $updated_at
 *
 * @property UserApp $userApp
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class UserQr extends Model
{
   
  /**
   * 
   * @property $table name of table DB
   */
   protected $table = "user_qr";
    
    static $rules = [
		'url_qr' => 'required',
		'content' => 'required',
		'tags' => 'required',
		'category_type_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['url_qr','content','tags','category_type_id','owner_user_id','date_create'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function userApp()
    {
        return $this->hasOne('App\UserApp', 'id', 'owner_user_id');
    }
    

}
