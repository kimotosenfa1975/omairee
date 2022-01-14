<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JishaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('jishas')->insert(
            [
                'user_id' => '1',
                'name' => 'omairee神社',
                'description' => 'omairee神社は国宝に指定され古代の建築様式を伝える四本殿をはじめ、 住吉の象徴とされる反橋（太鼓橋）や多数の文化財、樹齢1000年を超える御神木など、悠久の歴史を感じる由緒深い神社です。',
                'mail' => 'omairee@gmail.com',
                'bankName' => '口座名義',
                'financialName' => '金融機関名',
                'accountNumber' => '25635',
                'branch' => '支店名',
                'checked' => '1',
                'img' => 'jisha-item.png',
            ],
            [
                'user_id' => '2',
                'name' => 'omairee神社',
                'description' => 'omairee神社は国宝に指定され古代の建築様式を伝える四本殿をはじめ、 住吉の象徴とされる反橋（太鼓橋）や多数の文化財、樹齢1000年を超える御神木など、悠久の歴史を感じる由緒深い神社です。',
                'mail' => 'omairee@gmail.com',
                'bankName' => '口座名義',
                'financialName' => '金融機関名',
                'accountNumber' => '25635',
                'branch' => '支店名',
                'checked' => '0',
                'img' => 'jisha-item.png',
            ],
        );
    }
}
