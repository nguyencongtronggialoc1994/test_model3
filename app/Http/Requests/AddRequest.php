<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddRequest extends FormRequest
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
            'id'=>'required|numeric',
            'agencyName'=>'required',
            'numberPhone'=>'required',
            'email'=>'required',
            'address'=>'required',
            'managerName'=>'required',
            'status'=>'required'
        ];
    }
public function messages()
{
    $message=[
        'id.required'=>'khong duoc de rong',
        'id.numeric'=>'phai nhap so',
        'agencyName.required'=>'khong duoc de rong',
        'numberPhone.required'=>'khong duoc de rong',
        'email.required'=>'khong duoc de rong',
        'address.required'=>'khong duoc de rong',
        'managerName.required'=>'khong duoc de rong',
        'status.required'=>'khong duoc de rong',
    ];
    return $message;
}
}
