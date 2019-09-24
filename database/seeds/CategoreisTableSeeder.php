<?php

use Illuminate\Database\Seeder;

class CategoreisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'Web Exploitation',
            'Cryptography',
            'Forensics',
            'Steganography',
            'Reverse Engineering',
            'Miscellaneous'
        ];

        foreach ($categories as $category){
            DB::table('categories')->insert([
                'name' => $category,
            ]);
        }
    }
}
