<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   /**
     * The table associated with the model.
     *
     * @var string
     */
    //protected $table = 'my_products';

   /**
     * The primary key associated with the table.
     *
     * @var string
     */
    //protected $primaryKey = 'p_id';

    //public $timestamps = true;

   /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description'
    ];

}


