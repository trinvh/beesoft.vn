<?php namespace App\Http\Controllers\Admin;

use App\User;
use Input;
use Auth;

class AuthController extends Controller {

	public function getIndex() {
		return view('backend/login');
	}

	public function postIndex() {
		if(Auth::attempt(['email' => Input::get('login'),
				'password'	=> Input::get('password')
			])) {
			if(Auth::user()->is('admin')) {
				return redirect('admin');
			} else {
				return redirect()->back()->withError('Bạn không có đủ quyền truy cập vào đây');
			}
		} else {
			return redirect()->back()->withError('Sai email / mật khẩu.');
		}
	}

	public function getSignout() {
		Auth::logout();
		return redirect('/admin/auth')->withMessage('Bạn đã đăng xuất');
	}
}