<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Shop;
use App\Model\User;

use Illuminate\Http\Request;

use Session;

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
		$view->with("userId", Session::get("user_id", null));
		return $view;
	}

	public function create()
	{
		$view = view("shop/create");
		$view->with("userId", Session::get("user_id"));
		return $view;
	}

	public function postCreate()
	{
		// POST されたパラメタを取得
		$name = isset($_POST["name"]) ? $_POST["name"] : null;
		$lat = isset($_POST["lat"]) ? $_POST["lat"] : null;
		$lng = isset($_POST["lng"]) ? $_POST["lng"] : null;
		$category = isset($_POST["category"]) ? $_POST["category"] : "";
		$createdBy = isset($_POST["createdBy"]) ? $_POST["createdBy"] : "";

		if ($name == "" || is_null($name)) {
			return redirect("/shop/create");
		}
		if ($lat == "" || is_null($lat)) {
			return redirect("/shop/create");
		}
		if ($lng == "" || is_null($lng)) {
			return redirect("/shop/create");
		}

		$userCount = User::where("id", "=", $createdBy)->count();
		if ($createdBy == "" || is_null($createdBy) || $userCount == 0) {
			return redirect("/shop/create");
		}

		$shop = new Shop();
		$shop->name = $name;
		$shop->lat = $lat;
		$shop->lng = $lng;
		$shop->category = $category;
		$shop->created_by = $createdBy;
		$shop->save();

		return redirect("/shop/");
	}

}
