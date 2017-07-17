<?php

namespace blog\Http\Requests;

use blog\Mail\Welcome;
use blog\User;
use Illuminate\Foundation\Http\FormRequest;

class RegistrationForm extends FormRequest
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
          'name' => 'required|unique:users',
          'email' => 'required|email|unique:users',
          'password' => 'required|confirmed'
        ];
    }

    public function persist()
    {
      $user = User::create($this->only('name', 'email', 'password'));
      auth()->login($user);
      \Mail::to($user)->send(new Welcome($user));
    }
}
