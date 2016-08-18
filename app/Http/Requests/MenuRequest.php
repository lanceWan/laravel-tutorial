<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class MenuRequest extends Request
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
        $rules = [
            'parent_id' => 'required',
            'url' => 'required',
        ];
        if (request('id','')) {
            $rules['name'] = 'required|unique:menus,name,'.$this->id;
        }else{
            $rules['name'] = 'required|unique:menus,name';
        }
        return $rules;
    }

    public function messages()
    {
        return [
            'name.required' => '菜单名称不能为空',
            'name.unique' => '菜单名称不能重复',
            'parent_id.required' => '菜单层级不能为空',
            'url.required' => '菜单链接不能为空',
        ];
    }
}
