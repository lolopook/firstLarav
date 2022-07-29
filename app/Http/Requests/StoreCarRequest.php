<?php
//  créer ave cla comande php artisan make:request StoreCarRequest
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCarRequest extends FormRequest
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
                "brand" => ["required", "min:3"],
                "type" => "required",
                "price" => ["required", "min:3"],
                "weight" => "required",
                "power" => "required",
                "energy" => "required",
                "release_date" => [ "required", "date" ],
                "thumbnail" => ["required", "url"],
        ];
    }
}
