<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'username' => ['required', 'string', 'max:20'],
            'email' => ['required', 'email', 'max:255'], //テーブル毎に1件ならunique:contact_forms
            'age' => ['required'],
            'gender' => ['required', 'boolean'],
            'pstartage' => ['required'],
            'totalhistory' => ['required'],
            'pianohon' => ['required'],
            'soundproofhon' => ['required', 'boolean'],
            'community' => ['required', 'string', 'max:255'],
            'caution' => ['required', 'accepted']
            ];
    }
}
