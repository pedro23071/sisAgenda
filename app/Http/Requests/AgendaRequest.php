<?php

namespace sisAgenda\Http\Requests;

use sisAgenda\Http\Requests\Request;

class AgendaRequest extends Request
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
           'nombre'=>'requiered|max50',
           'ap'=>'requiered|max50',
           'tel1'=>'requiered|max30',
           'tel2'=>'max30',
           'correo'=>'requiered|max50',
           'dir'=>'requiered|max200',
        ];
    }
}



