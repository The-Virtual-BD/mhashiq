<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'email' => ['email', 'max:255', Rule::unique(User::class)->ignore($this->user()->id)],
            'first_name' => ['nullable','string', 'max:255'],
            'last_name' => ['nullable','string', 'max:255'],
            'designation' => ['nullable','string', 'max:255'],
            'orcid_id' => ['nullable','string', 'max:255'],
            'bio' => ['nullable','string'],
            'bio_mini' => ['nullable','string'],
            'phone' => ['nullable','string', 'max:20'],
            'address' => ['nullable','string'],
            'facebook' => ['nullable','string', 'max:255'],
            'instagram' => ['nullable','string', 'max:255'],
            'linkedin' => ['nullable','string', 'max:255'],
            'research_gate' => ['nullable','string', 'max:255'],
            'google_scolar' => ['nullable','string', 'max:255'],
            'cv' => ['nullable','mimes:png,jpg,jpeg,csv,txt,xlx,xls,pdf'],
            'aca_position' => ['nullable','string'],
            'job_position' => ['nullable','string'],
            'degrees' => ['nullable','string'],
            'extra_one' => ['nullable','string'],
            'extra_two' => ['nullable','string'],
            'extra_three' => ['nullable','string'],
        ];
    }
}
