<?php

namespace App\Interfaces\Http\Requests\User;

use App\Domain\User\Entities\Authorization\Role;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserUpdateRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'email' => 'required|email',
            'phone_number' => 'nullable',
            'password' => 'nullable',
            'role' => [ Rule::exists(Role::class,'id')],

        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'The name field is required.',
            'name.string' => 'The name field is invalid.',
            'email.required' => 'The email field is required.',
            'email.email' => 'The email field is invalid format.',
            'role.exits' => 'The role field is exits',
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
