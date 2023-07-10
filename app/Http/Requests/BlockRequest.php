<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class BlockRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        try {
            $title = $this->route()->getParameter('blocks')->title; // on update
        }
        catch( \Exception $e ) {
            $title = ""; // on create -> title doesn't exist yet
        }

        return [
            'title' => 'required|max:255|unique:blocks,title,'.$title.',title'
        ];
    }
}
