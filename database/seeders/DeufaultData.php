<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Company;
use App\Models\Employee;
use App\Models\CompanyIncome;
use App\Models\CompanyTax;
use App\Models\EmployeeIncome;
use App\Models\EmployeeTax;

class DeufaultData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $company=[
            [
                'id'=>1,
                'name'=>"Sathisoft Company"
            ],
            [
                'id'=>2,
                'name'=>"IT Company"
            ],
            [
                'id'=>3,
                'name'=>"Software Company"
            ]
        ];
        Company::insert($company);
        $employee=[
            [
                'id'=>1,
                'name'=>"Ram",
                'company_id'=>1
            ],
            [
                'id'=>2,
                'name'=>"Hari",
                'company_id'=>2
            ],
            [
                'id'=>3,
                'name'=>"Gita",
                'company_id'=>1
            ],
            [
                'id'=>4,
                'name'=>"Sita",
                'company_id'=>1
            ],
            [
                'id'=>5,
                'name'=>"Hari Bdr",
                'company_id'=>2
            ],
            [
                'id'=>6,
                'name'=>"Bhawana",
                'company_id'=>3
            ],
            [
                'id'=>7,
                'name'=>"Rajan",
                'company_id'=>3
            ]
        ];
        Employee::insert($employee);

        $company_income=[
            [
                'company_id'=>1,
                'income'=>20100.00,
                'year'  =>2020
            ],
            [
                'company_id'=>2,
                'income'=>20100.00,
                'year'  =>2020
            ],
            [
                'company_id'=>3,
                'income'=>20100.00,
                'year'  =>2020
            ],
            [
                'company_id'=>1,
                'income'=>20100.00,
                'year'  =>2021
            ],
            [
                'company_id'=>2,
                'income'=>20100.00,
                'year'  =>2021
            ],
            [
                'company_id'=>3,
                'income'=>20100.00,
                'year'  =>2021
            ]
        ];
        CompanyIncome::insert($company_income);

        $emp_income=[
            [
                'employee_id'=>1,
                'income'=>20100.00,
                'year'  =>2021
            ],
            [
                'employee_id'=>2,
                'income'=>20100.00,
                'year'  =>2021
            ],
            [
                'employee_id'=>3,
                'income'=>20100.00,
                'year'  =>2021
            ],
            [
                'employee_id'=>4,
                'income'=>20100.00,
                'year'  =>2021
            ],
            [
                'employee_id'=>5,
                'income'=>20100.00,
                'year'  =>2021
            ],
            [
                'employee_id'=>6,
                'income'=>20100.00,
                'year'  =>2021
            ]
        ];
        EmployeeIncome::insert($emp_income);

        $emp_income_tax=[
            [
                'employee_id'=>1,
                'tax_amount'=>20100.00,
                'year'  =>2021
            ],
            [
                'employee_id'=>2,
                'tax_amount'=>1100.00,
                'year'  =>2021
            ],
            [
                'employee_id'=>3,
                'tax_amount'=>2100.00,
                'year'  =>2021
            ],
            [
                'employee_id'=>4,
                'tax_amount'=>4100.00,
                'year'  =>2021
            ],

        ];
        EmployeeTax::insert($emp_income_tax);

        $com_income_tax=[
            [
                'company_id'=>1,
                'tax_amount'=>2000.00,
                'year'  =>2021
            ],
            [
                'company_id'=>2,
                'tax_amount'=>300.00,
                'year'  =>2021
            ],
            [
                'company_id'=>3,
                'tax_amount'=>5000.00,
                'year'  =>2021
            ],

        ];
        CompanyTax::insert($com_income_tax);
    }
}
