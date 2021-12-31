<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
        $article = $this->route()->parameter('article');

        $rules = [
            'title' => 'required',
            // 'slug' => 'required',
            'status' => 'required|in:1,2',
            'orden' => 'required',
            'estado' => 'required',
            'file' => 'image'
         ];

         // if ($article) {
         //     $rules['slug'] = 'required|unique:articles,slug,' . $article->id;
         // }

         if ($this->status == 2) {
             $rules =array_merge($rules, [
               
                'sl' => 'required',
                'tp' => 'required',
                'entrada' => 'required',
                'body' => 'required'

             ]);
         }

         return $rules;
    }
}
