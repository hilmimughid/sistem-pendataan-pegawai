<?php

namespace App\Charts;

use App\Models\Employee;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class EmployeeDivisionsChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PieChart
    {
        $labels = ['Produksi', 'Keuangan', 'Marketing', 'IT', 'HR'];
        $jumlahProduksi = Employee::where('divisi', 'Produksi')->count();
        $jumlahKeuangan = Employee::where('divisi', 'Keuangan')->count();
        $jumlahMarketing = Employee::where('divisi', 'Marketing')->count();
        $jumlahIT = Employee::where('divisi', 'IT')->count();
        $jumlahHR = Employee::where('divisi', 'HR')->count();

        return $this->chart->PieChart()
            ->addData([$jumlahProduksi, $jumlahKeuangan, $jumlahMarketing, $jumlahIT, $jumlahHR])
            ->setLabels($labels);
    }
}
