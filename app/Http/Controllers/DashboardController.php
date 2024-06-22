<?php

namespace App\Http\Controllers;

use App\Charts\EmployeeDivisionsChart;
use App\Charts\EmployeeDivisionsGenderChart;
use App\Charts\EmployeeGenderChart;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(EmployeeGenderChart $chartEmployeeGender, EmployeeDivisionsChart $chartEmployeeDivisions, EmployeeDivisionsGenderChart $chartEmployeeDivisionsGender)
    {
        return view('dashboard.index', [
            'chartEmployeeGender' => $chartEmployeeGender->build(),
            'chartEmployeeDivisions' => $chartEmployeeDivisions->build(),
            'chartEmployeeDivisionsGender' => $chartEmployeeDivisionsGender->build(),
        ]);
    }
}
