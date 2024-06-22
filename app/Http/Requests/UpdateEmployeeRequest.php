<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEmployeeRequest extends FormRequest
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
            'divisi' => 'required|in:Produksi,Keuangan,Marketing,IT,HR',
            'jabatan' => 'required|in:Staff,Manager,Direktur',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'no_hp' => 'required|string|regex:/^[0-9]{10,15}$/',
            'email' => 'required|email',
            'alamat' => 'required|string|max:254',
        ];
    }

    public function messages(): array
    {
        return [
            'nama.required' => 'Nama tidak boleh dikosongi',
            'nama.max' => 'Nama maksimal 254 karakter',
            'divisi.in' => 'Divisi tidak boleh dikosongi',
            'jabatan.in' => 'Jabatan tidak boleh dikosongi',
            'jenis_kelamin.in' => 'Jenis kelamin tidak boleh dikosongi',
            'no_hp.required' => 'Nomor handphone tidak boleh dikosongi',
            'no_hp.regex' => 'Format nomor handphone tidak valid',
            'email.required' => 'Email tidak boleh dikosongi',
            'email.email' => 'Format email tidak valid',
            'alamat.required' => 'Alamat tidak boleh dikosongi',
            'alamat.max' => 'Alamat maksimal 254 karakter',
        ];
    }
}
