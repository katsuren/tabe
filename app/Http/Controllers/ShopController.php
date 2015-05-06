<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Shop;

use Illuminate\Http\Request;

class ShopController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$shops = Shop::get();
		$view = view("shop/index");
		$view->with("shops", $shops);
		return $view;
	}

}
