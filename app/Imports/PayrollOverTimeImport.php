<?php

namespace App\Imports;

use App\Models\PayrollOverTime;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class PayrollOverTimeImport implements ToCollection
{
    public $month;

    public function __construct($month)
    {
        $this->month = $month;
    }

    public function collection(Collection $rows)
    {

        foreach ($rows as $index => $row) {

            if ($index > 0 && $row[0] !== '') {
                PayrollOverTime::create([
                    'employee_code' => $row[0],
                    'month' => $this->month,
                    'amount' => $row[6]
                ]);
            }
        }
    }
}
