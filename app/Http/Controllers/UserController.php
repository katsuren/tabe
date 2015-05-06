<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\User;

use Illuminate\Http\Request;
use Session;

class UserController extends Controller {

	public function signup()
	{
		return view('user/signup');
	}

	public function create()
	{
		// POST されたパラメタを取得
		$name = isset($_POST["name"]) ? $_POST["name"] : null;

		// 既存のユーザーを検索
		$userCount = User::where("name", "like", $name)->count();
		if ($userCount > 0 || $name == "" || is_null($name)) {
			// 存在する場合はエラーを表示
			$view = view('user/signup');
			$view->with("error", "ユーザーが存在します。またはデータが不正です。");
			return $view;
		}

		$user = new User();
		$user->name = $name;
		$user->save();

		Session::put("user_id", $user->id);

		return redirect("/shop");
	}

	public function login()
	{
		// POST されたパラメタを取得
		$name = isset($_POST["name"]) ? $_POST["name"] : null;

		if ($name == "" || is_null($name)) {
			return redirect("/");
		}

		$userList = User::where("name", "like", $name)->get();
		if (count($userList) > 0) {
			$user = $userList[0];
			Session::put("user_id", $user->id);
			return redirect("/shop");
		}

		return redirect("/");
	}

	public function logout()
	{
		Session::forget("user_id");
		return redirect("/");
	}
}
