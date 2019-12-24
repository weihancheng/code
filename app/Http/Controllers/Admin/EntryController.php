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
	public function login(Request $request)
	{
		// 验证
		$status = Auth::guard('api')->attempt([
			'username' => $request->input('username'),
			'password' => $request->input('password'),
		]);
		dd($status);
	}
}
