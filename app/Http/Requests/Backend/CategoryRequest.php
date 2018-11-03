<?php

namespace App\Http\Requests\Backend;

use App\Http\Requests\Request;

class CategoryRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        if ($this->category) {
            return [
                'name' => 'required|min:2|max:100',
                'locked' => 'sometimes|boolean',
            ];
        } else {
            return [
                'name' => 'required|min:2|max:100',
                'locked' => 'sometimes|boolean',
                'type' => 'required|in:' . implode(',', config('common.category.type')),
            ];
        }
    }

    public function attributes()
    {
        return [
            'name' => __('repositories.label.name'),
            'locked' => __('repositories.label.locked'),
            'image' => __('repositories.label.image'),
            'banner' => __('repositories.label.banner'),
            'icon' => __('repositories.label.icon'),
            'type' => __('repositories.label.type'),
        ];
    }
}
