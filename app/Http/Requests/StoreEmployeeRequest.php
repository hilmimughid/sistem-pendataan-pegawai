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
            'divisi' => 'required|in:Produksi,Keuangan,Marketing,IT,HR',
            'jabatan' => 'required|in:Staff,Supervisor,Manager,Direktur',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'no_hp' => 'required|string|regex:/^[0-9]{10,15}$/|unique:employees',
            'email' => 'required|email|unique:employees',
            'alamat' => 'required|string|max:254',
        ];
    }

    public function messages(): array
    {
        return [
            'nama.required' => 'Nama wajib diisi',
            'nama.max' => 'Nama maksimal 254 karakter',
            'divisi.in' => 'Divisi wajib diisi',
            'jabatan.in' => 'Jabatan wajib diisi',
            'jenis_kelamin.in' => 'Jenis kelamin wajib diisi',
            'no_hp.required' => 'Nomor handphone wajib diisi',
            'no_hp.regex' => 'Format nomor handphone tidak valid',
            'no_hp.unique' => 'Nomor handphone sudah terdaftar',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Format email tidak valid',
            'email.unique' => 'Email sudah terdaftar',
            'alamat.required' => 'Alamat wajib diisi',
            'alamat.max' => 'Alamat maksimal 254 karakter',
        ];
    }
}
