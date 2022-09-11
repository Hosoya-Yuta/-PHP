<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class experienceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('experience')->insert([
            [
                'difficulty' => '優しい',
                'time' => '1h',
                'review' => "①サウナ5分、水風呂2分
                ②サウナ7分、水風呂3分
                ③サウナ10分、水風呂3分
                これ最強",
                'id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'difficulty' => '優しい',
                'time' => '1.5h',
                'review' => "サウナ：10分 × 3
                水シャワー：2分 × 3
                休憩：10分 × 3
                合計：3セット ",
                'id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'difficulty' => '難しい',
                'time' => '1.5h',
                'review' => "ミスト1セット
                メディテーションサウナ1セット
                でぐちアウフグース2セット

                でぐちさんしか勝たん！！！ ",
                'id' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'difficulty' => '普通',
                'time' => '1.5h',
                'review' => "サウナ：10分 × 3
                水風呂：1分 × 3
                休憩：10分 × 3
                合計：3セット  ",
                'id' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'difficulty' => '優しい',
                'time' => '2.5h',
                'review' => "ウェルビー福岡サウナ：森→メイン→メイン（1:00アウフ）
                水風呂：強からの弱→強からの弱→強

                0時ごろにミッドナイトサウナで。
                アウフグース時以外空いてて快適。
                ととのいスペースに新しいリクライニングが。
                天拝の内湯に設置されているものと恐らく同じ。黒くしっかりしたタイプ。
                インフィニティは壊れるし、少し前まで置いてたナイロン製のものは破れるし…ということで導入したのだろう。
                アウフグースの担当はワタナベさん。
                じっくりと時間をかけたロウリュから始まり、狭いサ室内でありながら可能な限りダイナミックに風を送る。素晴らしい。。
                中々の熱さだったが、途中離脱者ゼロで強者揃いだなと笑",
                'id' => 7,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'difficulty' => '普通',
                'time' => '1.5h',
                'review' => "極楽湯 柏店　サウナ 10分 × 2
                水風呂 1分 × 2
                休憩 10分の間 × 2
                合計2セット

                久しぶりのサ活！ホームの極楽湯へ。
                深夜の時間帯は初めてでした。
                この時間はまた違った賑わい！

                会話は少しあるが、気になるほどではない。
                マナーはやはり極楽湯は近隣では一番いい！
                知らぬ間にまた値上げが、、、
                回数券で１回６５０円はコスパは高いが、
                また値上げかぁと言った感じです。",
                'id' => 8,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'difficulty' => '優しい',
                'time' => '1.5h',
                'review' => "サウナ：10分 × 3
                水シャワー：2分 × 3
                合計：3セット ",
                'id' => 9,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'difficulty' => '普通',
                'time' => '1.5h',
                'review' => "サウナ：10分 × 3
                休憩：10分 × 3
                合計：3セット ",
                'id' => 9,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'difficulty' => '厳しめ',
                'time' => '1.5h',
                'review' => "サウナ：10分 × 3
                水シャワー：2分 × 3
                休憩：10分 × 3
                合計：3セット ",
                'id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'difficulty' => '普通',
                'time' => '1.5h',
                'review' => "サウナ：10分 × 3
                水シャワー：2分 × 3
                休憩：10分 × 10
                合計：3セット ",
                'id' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'difficulty' => 'ほどほど',
                'time' => '5.5h',
                'review' => "サウナ：1分 × 3
                水シャワー：1分 × 3
                休憩：10分 × 3
                合計：3セット ",
                'id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'difficulty' => '普通かな',
                'time' => '1.5h',
                'review' => "サウナ：10分 × 3
                水シャワー：12分 × 3
                休憩：10分 × 3
                合計：3セット ",
                'id' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'difficulty' => '優しい',
                'time' => '1h',
                'review' => "サウナ：5分 × 3
                水シャワー：2分 × 3
                休憩：10分 × 3
                合計：3セット ",
                'id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'difficulty' => '難しい',
                'time' => '1.5h',
                'review' => "サウナ：10分 × 3
                水シャワー：2分 × 3
                休憩：15分 × 3
                合計：3セット ",
                'id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
