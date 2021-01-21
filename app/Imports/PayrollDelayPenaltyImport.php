<?php

namespace App\Imports;

use App\Models\PayrollDelayPenalty;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class PayrollDelayPenaltyImport implements ToCollection
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
                PayrollDelayPenalty::create([
                    'employee_code' => $row[0],
                    'month' => $this->month,
                    'durantion' => $row[5],
                    'amount' => $row[6]
                ]);
            }
        }
    }
}
