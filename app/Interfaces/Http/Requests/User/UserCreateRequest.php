<?php

namespace App\Interfaces\Http\Requests\User;

use App\Domain\User\Entities\Authorization\Role;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

/**
 * @property-read string $name
 * @property-read string $email
 * @property-read string $phone_number
 * @property-read string $password
 * @property-read int $role
 */
class UserCreateRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'email' => 'required|email',
            'phone_number' => 'nullable',
            'password' => 'required',
            'role' => ['required', Rule::exists(Role::class,'id')],

        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'The name field is required.',
            'name.string' => 'The name field is invalid.',
            'email.required' => 'The email field is required.',
            'email.email' => 'The email field is invalid format.',
            'password.required' => 'The password field is required',
            'role.required' => 'The role field is required',
            'role.exits' => 'The role field is exits',
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
