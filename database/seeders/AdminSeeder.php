<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = ['user_id'=>1,'name'=>'Morgans Admin','company_name'=>'Morgans Consortium','company_email'=>'admin@oysterchecks.com','company_phone'=>'08023457567','role_id'=>1];

        Admin::create($admin);
    }
}
