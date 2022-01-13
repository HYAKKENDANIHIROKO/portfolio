<?php

use Illuminate\Database\Seeder;

class ShopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $shops=[
                  ['shop_name'=>'木の実',
                 'price'=>'昼：1000円～1999円　夜1000円～1999円',
                 'image'=>'jXz9YdrvxZKQ2PqOcaoo0EXF6vANILfBal5ZiP2m.jpg',
                 'seat'=>'カウンター・テーブル・テラス席あり　全部で66席。最大予約可能人数は着席時12人。全席禁煙',
                 'menu'=>'デザート：プリンアラモード、パンケーキ、パフ',
                 'address'=>'千葉県 流山市 南流山 6-23-',
                 'user_id'=>'hiro',
                 'tel'=>'04-7159-7005',
                 'opening_hours'=>'[月〜木・土日10:00〜18:00(L.O)17:00[金] 11月から金曜日のみディナー再開10:00〜18:00(L.O)17:00　18:30〜22:30(L.O)21:30
                日曜営業　定休日　火曜日',
                 'transportation'=>'JR武蔵野線・つくばエクスプレス「南流山」駅から徒歩10分京成バス「7号公園」から徒歩20秒　南流山駅から592m',
                 'pay'=>'カード不可・電子マネー不可、現金のみ',
                 'people_number'=>'12'],
                  ['shop_name'=>'フルーツカフェpomp',
                 'price'=>'昼：2000円～2999円　夜：2000円～2999円',
                 'image'=>'CDvNSbFCaue2mOgOtfjHRRzSF4ApxhgXrjyiwmM9.jpg',
                 'seat'=>'カウンターのみ、11席。全席禁煙。',
                 'menu'=>'パフェ・かき氷・ケーキ',
                 'address'=>'東京都日本橋人形町2－21－4　加藤ビル1階',
                 'user_id'=>'hiro',
                 'tel'=>'03-5843-6207',
                 'opening_hours'=>'営業時間 水曜日、金曜日　13:30〜19:30木曜日、土曜日13:30〜18:30、日曜日13:00〜18:00
                定休日の月曜日と火曜日が祝日の時は、13:30〜18:30まで営業。変更する場合もあります。日曜営業　定休日は月・火曜日(祝日は営業)',
                 'transportation'=>'日比谷線　人形町駅A2　徒歩3分　都営浅草線　人形町駅A3　徒歩4分　半蔵門線　水天宮前駅7　徒歩6分　都営新宿線　浜町駅A2　徒歩7分
                人形町駅から190m',
                 'pay'=>'カード可（VISA、Master、JCB、AMEX）電子マネー可（交通系電子マネー（Suicaなど）、楽天Edy、nanaco、WAON、iD、QUICPay）',
                 'people_number'=>'11'],
                  ['shop_name'=>'ハティフナット　吉祥寺のおうち',
                 'price'=>'昼：1000円～1999円',
                 'image'=>'DXabWbuhmSCvpa6dAY8G4hynskJe1EsrZMYewJ6V.jpg',
                 'seat'=>'72席。個室なし。貸し切りは可能。全席禁煙',
                 'menu'=>'チーズドリア',
                 'address'=>'東京都武蔵野市吉祥寺南町2‐22‐',
                 'user_id'=>'ヒロ',
                 'tel'=>'0422-26-6773',
                 'opening_hours'=>'[月～木・日]11:30～22:00[金・土]11:30～22:00　日曜営業　定休日不定休',
                 'transportation'=>'吉祥寺駅北口より徒歩８分　吉祥寺駅から497m',
                 'pay'=>'カード不可・電子マネー不可',
                 'people_number'=>'72'],
                 ];
                 foreach ($shops as $shop) {
                     \App\Shop::create($shop);
                 }
    }
}
