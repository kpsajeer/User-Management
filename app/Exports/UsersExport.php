<?php

namespace App\Exports;

use App\User;

use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;


class UsersExport implements FromQuery, WithHeadings
{
    use Exportable;

    public function __construct(array $columns, int $template)
    {
        $this->columns = $columns;
        $this->template = $template;
    }

    public function headings(): array
    {
        if($this->template == 1){
            return ['User ID', 'Username', 'Email',];
        }
        else {
            return ['First Name', 'Last Name', 'City',];
        }
    }

    public function query()
    {
        return User::query()->where('role', '!=', 'admin')->select($this->columns);
    }
}
