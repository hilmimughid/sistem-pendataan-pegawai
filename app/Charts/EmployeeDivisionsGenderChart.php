<?php

namespace App\Charts;

use App\Models\Employee;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class EmployeeDivisionsGenderChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {
        $divisions = ['Produksi', 'Keuangan', 'Marketing', 'IT', 'HR'];
        $jumlahLaki = [];
        $jumlahPerempuan = [];

        foreach ($divisions as $division) {
            $jumlahLaki[] = Employee::where('divisi', $division)
                ->where('jenis_kelamin', 'Laki-laki')
                ->count();
            $jumlahPerempuan[] = Employee::where('divisi', $division)
                ->where('jenis_kelamin', 'Perempuan')
                ->count();
        }

        return $this->chart->barChart()
            ->addData('Laki-laki', $jumlahLaki)
            ->addData('Perempuan', $jumlahPerempuan)
            ->setXAxis($divisions);
    }
}
