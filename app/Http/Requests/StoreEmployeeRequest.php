<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmployeeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nama' => 'required|string|max:254',
            'divisi' => 'required|in:Produksi, Keuangan, Marketing, IT, HR',
            'jabatan' => 'required|in:Staff, Supervisor, Manager, Direktur',
            'jenis_kelamin' => 'required|in:Laki-laki, Perempuan',
            'no_hp' => 'required|string|min:10|max:15|unique:employees|regex:/^[0-9]{1,15}$/',
            'email' => 'required|email|unique:employees',
            'alamat' => 'required|string|max:254',
        ];
    }
}
