<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {;
        $search = $request->get('search');
        $employees = Employee::where('nama', 'like', '%' . $search . '%')
            ->orWhere('divisi', 'like', '%' . $search . '%')
            ->orWhere('jabatan', 'like', '%' . $search . '%')
            ->orWhere('jenis_kelamin', 'like', '%' . $search . '%')
            ->orWhere('no_hp', 'like', '%' . $search . '%')
            ->orWhere('email', 'like', '%' . $search . '%')
            ->orWhere('alamat', 'like', '%' . $search . '%')
            ->orderBy('nama')
            ->paginate(5);
        return view('employee.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employee.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEmployeeRequest $request)
    {
        try {
            Employee::create($request->validated());
            return redirect()->route('pegawai.index');
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal menambahkan data pegawai: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $employee = Employee::find($id);
        return view('employee.show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $employee = Employee::find($id);
        return view('employee.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmployeeRequest $request, $id)
    {
        try {
            $employee = Employee::find($id);
            $employee->update($request->validated());
            return redirect()->route('pegawai.index');
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal mengupdate data pegawai: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $employee = Employee::find($id);
            $employee->delete();
            return redirect()->route('pegawai.index');
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal menghapus data pegawai: ' . $e->getMessage());
        }
    }
}
