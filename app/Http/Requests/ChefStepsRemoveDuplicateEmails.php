<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ChefStepsRemoveDuplicateEmails extends Request
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
            'count' => 'required|integer|max:100000|min:1',
            'chance' => 'required|integer|max:100|min:1'
        ];
    }
}
