<?php

namespace App\Imports;

use App\Models\PayrollAbsencePenalty;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class PayrollAbsencePenaltyImport implements ToCollection
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
                PayrollAbsencePenalty::create([
                    'employee_code' => $row[0],
                    'month' => $this->month,
                    'days' => $row[5],
                    'amount' => $row[6]
                ]);
            }
        }
    }
}
