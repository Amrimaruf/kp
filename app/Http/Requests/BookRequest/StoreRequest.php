<?php

namespace App\Http\Requests\BookRequest;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'book_code' => 'required|min:3|unique:books,book_code',
            'name' => 'required|min:3|max:65',
            'description' => 'required|min:3',
            'thumbnail' => 'required|mimes:png,jpg,svg,jpeg,ico|max:10000',
            'category_id' => 'required',
            'author_id' => 'required',
            'publisher_id' => 'required',
            'publication_year' => 'required|min:4|max:4',
            'isbn' => 'required|min:15|max:22',
            'stock' => 'required|min:1|alpha_num'
        ];
    }
}
