<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EntryController extends Controller
{

	/**
	 * 登录接口
	 */
	public function login()
	{
		// 验证
		$status = Auth::guard('admin')->attempt([
			'username' => Request::input('username'),
			'password' => Request::input('password'),
		]);
		dd($status);
	}
}
