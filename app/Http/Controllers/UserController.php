<?php

namespace App\Http\Controllers;

use App\User;
use App\Profile;
use Illuminate\Http\Request;
use App\Http\Requests;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Controller\Auth;

class UserController extends BaseController {

	protected $layout = "templates.default";

	public function __construct() {
		$this->beforeFilter('csrf', array('on'=>'post'));
		$this->beforeFilter('auth', array('only'=>array('getDashboard')));
	}

	public function getIndex() {
		$data['users'] = User::get();
		return view( 'user.index', $data );
	}

	public function getHome() {
		$data['users'] = User::get();
		return view( 'user.home', $data );
	}

	public function getView( $id=1 ) {
		$data = User::find( $id );
		return view( 'user.view', $data );
	}

	public function getEdit( $id=1 ) {
		$data['user'] = User::find( $id );
		return view( 'user.edit', $data );
	}

	public function postEdit($id, Request $request) {
		$user = User::find( $id );
		$input = $request->except( array( 'submit', '_token' ));
		foreach ( $input AS $key => $value ) {
			$user[$key] = $value;
		}
		$user->save();
		return redirect()->action( 'UserController@getView', array( $id ) );
	}

	public function getCreate() {
		return view('user.create');
	}

	public function postCreate(Request $request) {
		$validator = \Validator::make( $request->all(), User::$rules );

		if ($validator->passes()) {
			$user = new User;
			$user->first_name = $request->input('first_name');
			$user->last_name = $request->input('last_name');
			$user->email = $request->input('email');
			$user->password = \Hash::make($request->input('password'));
                        $user->role = $request->input('role');
			$user->save();
			return redirect('users')->with('message', 'Thanks for Creating!');
		} else {
			return redirect('user/create')->with('message', 'The following errors occurred')->withErrors($validator)->withInput();
		}
	}

	public function getLogin() {
		$data = array();
		return view( 'user.login', $data );
	}

	public function postLogin() {
		if ( \Auth::attempt(array('email'=>\Input::get('email'), 'password'=>\Input::get('password')))) {
			return redirect('/dashboard');
		} else {
			return redirect('/user/login')
				->withErrors('Your username/password combination was incorrect')
				->withInput();
		}
	}

	public function getLogout() {
		\Auth::logout();
		return redirect('/')->with('message', 'You are now logged out!');
	}

	public function getPassword() {
		$data = array();
		return view( 'user.password', $data );
	}

}
