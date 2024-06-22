<?php

namespace App\Charts;

use App\Models\Employee;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class EmployeeGenderChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PieChart
    {
        $labels = ['Laki-laki', 'Perempuan'];
        $jumlahLaki = Employee::where('jenis_kelamin', 'Laki-laki')->count();
        $jumlahPerempuan = Employee::where('jenis_kelamin', 'Perempuan')->count();

        return $this->chart->pieChart()
            ->addData([$jumlahLaki, $jumlahPerempuan])
            ->setLabels($labels);
    }
}
