<?php

namespace App\Http\Requests;

use App\Enums\UserRole;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;

class StoreUserRequest extends FormRequest
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
        // dd(request()->input());
        return [
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'phone_number' => ['string', 'max:20', 'unique:users'],
            'pesel' => ['numeric', 'min_digits:11', 'max_digits:11', 'unique:users'],
            'date_of_birth' => ['required', 'date'],
            'city' => ['required', 'string', 'max:255'],
            'street' => ['required', 'string', 'max:255'],
            'street_number' => ['required', 'string', 'max:20'],
            'apartment_number' => ['nullable', 'string', 'max:20'],
            'postcode' => ['required', 'string', 'max:5'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role' => [new Enum(UserRole::class)],

        ];
    }
}