<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Wallet;

class WalletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $wallets = [

            ['user_id'=> 1, 'avail_balance' => 5000, 'book_balance'=>5000, 'total_balance' => 5000]
        ];

        foreach($wallets as $wallet){
            Wallet::create($wallet);
        }
    }
}
