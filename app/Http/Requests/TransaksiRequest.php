<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TransaksiRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    // public function authorize(): bool
    // {
    //     return false;
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'operator_id' => 'required',
            'member_id' => 'required',
            'nama_barang' => 'required',
            'pcs' => 'required',
            'tgl_masuk' => 'required',
            'tgl_keluar' => 'required',
            'harga' => 'required',
        ];
    }
}
