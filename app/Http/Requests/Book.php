<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Book extends FormRequest
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
        return [
            //
            'name'=>'required',
            'editorial'=>'required',
            'autor'=>'required',
            'genero'=>'required',
            'paginas'=>'required',
            'isbn'=>'required',
            'image'=>'required'
            
        ];
    }
}
