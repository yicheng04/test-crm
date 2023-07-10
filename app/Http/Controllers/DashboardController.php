<?php 

namespace App\Http\Controllers;

use App\User;
use Auth;

class DashboardController extends BaseController {

	protected $layout = "templates.default";

	public function __construct() {
		$this->beforeFilter('csrf', array('on'=>'post'));
	}
	
	public function getAdmin( $id=0 ) {
	    if ( $id == 0 ) $id = Auth::user()->id;
		$data = User::find( $id );
		return view( 'dashboard.admin', $data );		
	}
	
	public function getInstructor( $id=0 ) {
	    if ( $id == 0 ) $id = Auth::user()->id;
		$data = User::find( $id );
		return view( 'dashboard.instructor', $data );
	}
	
	public function getParent( $id=0 ) {
	    if ( $id == 0 ) $id = Auth::user()->id;
		$data = User::find( $id );
		return view( 'dashboard.parent', $data );		
	}
	
	public function getStudent( $id=0 ) {
	    if ( $id == 0 ) $id = Auth::user()->id;
		$data = User::find( $id );
		return view( 'dashboard.student', $data );		
	}
	
	public function getStudentParent( $id=0 ) {
	    if ( $id == 0 ) $id = Auth::user()->id;
		$data = User::find( $id );
		return view( 'dashboard.studentparent', $data );		
	}
	
	public function getGeneral( $id=0 ) {
	    if ( $id == 0 ) $id = Auth::user()->id;
		$data = User::find( $id );
		return view( 'dashboard.general', $data );		
	}
	
	public function getPayments( $id=0 ) {
		if ( $id == 0 ) $id = Auth::user()->id;
		$data = User::find( $id );
		return view( 'dashboard.payments', $data );
	}
	
	public function getProfile( $id=0 ) {
		if ( $id == 0 ) $id = Auth::user()->id;
		$data = User::find( $id );
		return view( 'dashboard.profile', $data );
	}
	
	public function getWeek( $id=0 ) {
		if ( $id == 0 ) $id = Auth::user()->id;
		$data = User::find( $id );
		return view( 'dashboard.week', $data );
	}

	public function getSchedule( $id=0 ) {
		if ( $id == 0 ) $id = Auth::user()->id;
		$data = User::find( $id );
		return view( 'dashboard.schedule', $data );
	}
	
}
