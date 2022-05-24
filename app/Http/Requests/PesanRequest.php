<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PesanRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nama' => 'required',
            'tema' => 'required',
            'lokasi' => 'required',
            'kuota' => 'required',
            'tanggal' => 'required',
        ];
    }
}