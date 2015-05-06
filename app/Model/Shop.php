<?php namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model {

	protected $table = 'shops';

	protected $fillable = ['name', 'lat', 'lng', 'category', 'created_by', 'created_at', 'updated_at'];

}
