<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Libro
 *
 * @property $id_libro
 * @property $nombre_libro
 * @property $categoria_libro
 * @property $created_at
 * @property $updated_at
 *
 * @property Categoria $categoria
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Libro extends Model
{
    
    static $rules = [
		'nombre_libro' => 'required',
		'categoria_libro' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id','nombre_libro','categoria_libro'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function categoria()
    {
          

        return $this->hasOne('App\Categoria', 'id', 'categoria_libro');
    }
    

}
