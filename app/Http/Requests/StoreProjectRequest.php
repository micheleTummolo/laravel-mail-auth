<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
            'name'        => ['required', 'unique:projects', 'max:150'],
            'description' => ['nullable'],
            'type_id'     => ['nullable', 'exists:types,id'],
            'cover_image' => ['nullable', 'image']
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Il nome è richiesto',
            'name.unique' => 'E\' già presente un progetto con questo nome',
            'name.max' => 'Il nome non può essere lungo più di :max caratteri',
            'type_id.exsists' => 'Tipo selezionato non valido',
            'cover_image.image' => 'Inserire un formato di immagine valido',
        ];
    }
}
