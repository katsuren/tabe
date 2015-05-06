<?php namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ShopImage extends Model {

	protected $table = 'shop_images';

	protected $fillable = ['review_id', 'created_at', 'updated_at'];
}
