<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use \App\Contact;
use \App\ContactReason;

class ContactController extends Controller
{
    public function index()
    {
        $data['contacts'] = Contact::all();
        return view( 'contact.index', $data );
    }

    public function create()
    {
        $data['contact_reasons'] = ContactReason::lists('reason', 'id');
        return view( 'contact.create', $data );
    }

    public function store(Request $request)
    {
        $rules = ['captcha' => 'required|captcha'];
        $messages = array(
            'required' => 'The :attribute field is required.',
            'captcha' => 'Invalid captcha'
        );
        $validator = \Validator::make(\Input::all(), $rules, $messages);

        if ($validator->fails()) {
            return \Redirect::to('contact')->withErrors($validator);
        }
        else {
            $input = \Input::except('captcha');
            $data = Contact::create( $input );
            return redirect('/');
        }
    }

    public function show($id)
    {
        $data['contact'] = Contact::find( $id );
        return view( 'contact.show', $data );
    }

    public function edit($id)
    {
        $data['contact'] = Contact::find( $id );
        $data['contact_reasons'] = ContactReason::lists('reason', 'id');
        return view( 'contact.edit', $data );
    }

    public function update(Request $request, $id)
    {
		$input = \Input::except( array( 'submit', '_token', '_method' ));
        $record = Contact::find( $id );
		foreach ( $input AS $key => $value ) {
			$record[$key] = $value;
		}
        $record->save();
        $data['contact'] = $record;
        return view( 'contact.show', $data );  
    }

    public function destroy($id)
    {
        //
    }
}
