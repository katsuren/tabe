<?php namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ShopReview extends Model {

	const COST_1000_BELOW   = 1;
	const COST_2000_BELOW   = 2;
	const COST_3000_BELOW   = 3;
	const COST_4000_BELOW   = 4;
	const COST_5000_BELOW   = 5;
	const COST_10000_BELOW  = 10;
	const COST_10000_OVER   = 11;

	protected $table = 'shop_reviews';

	protected $fillable = ['created_by', 'shop_id', 'review', 'score', 'cost', 'created_at', 'updated_at'];
}
