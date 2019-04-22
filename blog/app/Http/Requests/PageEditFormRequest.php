<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PageEditFormRequest extends FormRequest
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
        /*
        Unlike when a new page is created, when this page is being EDITED user doesnt 
        have to upload a new file. Only validate If file is being uploaded (if detected)
        We leave the 'img' = request blank. Validation will happen in Pagescontroler()@edit 
        */
        
        return [
            'title' =>  'required',
            'content'=> 'required',
            // 'img' => 'required', // When page edited not a must to upload new File
        ]; 
      
    }
}
