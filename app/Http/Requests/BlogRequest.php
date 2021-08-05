<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
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
        return tap([
            'date' => 'required',
            'heading' => 'required',
            'display' => 'required',
            'details' => 'required',
        ], function (){
            if (request()->hasFile(request()->image)){
                request()->validate([
                    'image' => 'required|file|image'
                ]);
            }
        });
    }
}
