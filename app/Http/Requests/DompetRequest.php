<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DompetRequest extends FormRequest
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
            // 'id' =>'required',
            'nama' => 'required|min:5|max:100',
            'referensi' => 'nullable|max:100',
            'deskripsi' => 'nullable|max:100',
            'status_id'=> 'required',
        ];
    }
}
