<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 20; $i++) {
            Role::create([
                'col1' => 'col1',
                'col2' => 'col2',
                'col3' => 'col3',
                'col4' => 'col4',
                'col5' => 'col5',
                'col6' => 'col6',
                'col7' => 'col7',
                'col8' => 'col8',
                'col9' => 'col9',
                'col10' => 'col10',
                'col11' => 'col11',
                'col12' => 'col12',
                'col13' => 'col13',
                'col14' => 'col14',
                'col15' => 'col15',
            ]);
        }
    }
}
