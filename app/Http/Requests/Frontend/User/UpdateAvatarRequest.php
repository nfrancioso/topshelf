<?php

namespace App\Http\Requests\Frontend\User;

use Illuminate\Validation\Rule;
use App\Helpers\Frontend\Auth\Socialite;
use Illuminate\Foundation\Http\FormRequest;

/**
 * Class UpdateAvatarRequest.
 */
class UpdateAvatarRequest extends FormRequest
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
            'avatar_type' => ['required', 'max:191', Rule::in(array_merge(['gravatar', 'storage'], (new Socialite)->getAcceptedProviders()))],
            'avatar_location' => 'sometimes|image|max:191',
        ];
    }
}
