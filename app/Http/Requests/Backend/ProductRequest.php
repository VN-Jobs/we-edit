<?php

namespace App\Http\Requests\Backend;

use App\Http\Requests\Request;

class ProductRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function rules()
    {
        if ($this->product) {
            return [
                'name' => 'required|min:2|max:175',
                'price' => 'required|min:2|max:175',
                'category_id' => 'required|integer|not_in:0',
                'image'=> 'nullable|image|mimes:jpeg,jpg,gif,bmp,png|max:1200',
                'image_ba'=> 'nullable|image|mimes:jpeg,jpg,gif,bmp,png|max:1200',
            ];
        } else {
            return [
                'name' => 'required|min:2|max:175',
                'price' => 'required|min:2|max:175',
                'category_id' => 'required|integer|not_in:0',
                'image'=> 'required|image|mimes:jpeg,jpg,gif,bmp,png|max:1200',
                'image_ba'=> 'required|image|mimes:jpeg,jpg,gif,bmp,png|max:1200',
            ];
        }
    }

    public function attributes()
    {
        return [
            'name' => __('repositories.label.name'),
            'price' => __('repositories.label.price'),
            'category_id' => __('repositories.label.category_id'),
            'image' => __('repositories.label.image'),
            'image_ba' => __('repositories.label.image_ba'),
        ];
    }
}
