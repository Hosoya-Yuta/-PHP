<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class store_reviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('store_reviews')->insert([
            [
                'store_name' => '岩乃湯',
                'place' => '板橋区',
                'regular' => "かなり多い。近隣の人がほぼ毎日来ている",
                'TV' => "あり。小さい",
                'temperature' => "90度",
                'water_temperature' => "20度（夏場は30度でぬるい）",
                'width' => "10人程度",
                'smell' => "ほんのり木の匂いがする",
                'congestion' => "夕方から21時はほぼ満員",
                'outside_bath' => "あり",
                'music' => "テレビの音",
                'mat' => "有り、受付の後ろにある",
                'cleanliness' => "古い銭湯なのでところどころサビがある",
                'age group' => "50〜60代が多い",
                'review' => "#水風呂
                井戸が不調で水道水で長らくやってるけど割と気合いの入った水風呂…のイメージだった。
                しかし掛水をした時点で違和感。浸かってみると…ぬるい。多分、私の体質が変わったせいだと思う。
                水温計は25℃を指してたけどさすがに体感はもっと冷たかった。

                #休憩スペース
                外気浴は可能だが椅子がない。自前のサウナマットを床に敷いて開脚前屈するにも狭い感じなので浴室内で過ごした。が、暑いｗ
                次はカラン用の椅子を持ちだして外気浴でも良いかも。

                ここは「猫がいる銭湯」で有名だけど10回弱は来てるのに一度も出会えた事がない。
                今回も会えなかった。",
                'id' => "1",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'store_name' => 'カプセルホテル&サウナ 池袋プラザ',
                'place' => '豊島区',
                'regular' => "カプセルホテルなので常連度は少なめ",
                'TV' => "有り",
                'temperature' => "98度",
                'water_temperature' => "20度",
                'width' => "10人程度",
                'smell' => "無臭",
                'congestion' => "平日は少なめ",
                'outside_bath' => "無し",
                'music' => "テレビの音",
                'mat' => "無し",
                'cleanliness' => "きれいめ",
                'age group' => "30前後の若い世代が多い",
                'review' => "【池袋ウェストゲートサウナ】

                東京、池袋の西口公園。通称“池袋ウエストゲートパーク”近くにある海苔屋の息子・隼人はヤクザ絡みの犯罪やギャングの縄張り争いなど、警察では手出しできない難事件を次々に解決する“池袋のトラブルシューター”と呼ばれていた

                有象無象な人間が集まる池袋の中で、組織に属さず、誰にでも フラットに付き合う隼人の元には、常に危険で刺激的な依頼が舞い込む。

                一章－池袋サウナシヴィルウォー

                池袋には四つの勢力がある
                かるまる、タイムズスパ、ロイヤル、プラザだ。

                それぞれのチームが互いに絶妙なバランスを保っていた。

                がロイヤルの急な休業。

                ※最近サウナイキタイで知ったよ。渋谷カプセルも休業。錦糸町は瀕死。繁華街だからって油断できない世知辛い

                隣町のカプセルイン大塚のリニューアルやらパワーバランスが崩れ、今サウナ戦国時代へと突入。

                俺はサウナキングことかるまるのヘッドからの命令（こいつがキングなら俺は道化だな。へい、かしこまりました）でプラザに来ていた。

                ロイヤルが休業になったことで常連が各所に散らばった。との噂話の真相を暴くためだ。

                今日はアロマデー。
                何かいい匂いだなぁ。

                ♯サウナ

                フィンランド式高温
                赤羽同様に熱圧が凄い。

                紅い座敷牢のような不思議なつくりでいつも無駄にわくわくする。

                遠赤外線は中温。

                銭湯とかでよく見かけるのだが改めて全身をじっくりと熱くさせるんだなぁ。と関心するほどここのセッティングは絶妙。

                昨年この二つのサ室でオリンピックを見てたなぁ

                ♯水風呂

                20℃の表示。

                下に水流があり体感はもっと涼しい。広くて深いので心地よい。

                途中で巨大な氷塊四つ投入するというイベントがあった。水土日不定期で実施らしい。完璧

                ♯休憩

                面白いのはここ浴室に岩盤浴スペースがある。がこの楽しみ方がいまいちわからない。

                岩盤浴の良さを知らず大人になってしまった。とほほな俺。

                なのでいつも脱衣所のベンチで扇風機にあたる。

                なお、ちょっと奥にいくとインフィニティチェアと巨大ファンがある。是非試して欲しい。館内着着ないとだがキマルゼ

                至って平和。
                客層もソロ中心でマナーよし。　改めて良いサウナ施設だ。

                かるまるというキングがいながら
                ここにはここの良さがある。

                ふと、最近「マナーよし」とよくサ活で書いてるがそもそも俺がいく時間帯が単に早いだけなんじゃないか？と思った。

                まぁ別にいいか。

                誰にでも優しい街、愛と平和の池袋。 …そう、池袋は最高だ",
                'id' => "5",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'store_name' => 'サウナ&ホテル かるまる 池袋店',
                'place' => '豊島区',
                'regular' => "ほとんど新規なので常連客はあまりいない",
                'TV' => "有り",
                'temperature' => "90℃",
                'water_temperature' => "20℃",
                'width' => "25人",
                'smell' => "檜の香り",
                'congestion' => "いつも混雑している",
                'outside_bath' => "有り。かなりの数",
                'music' => "無し",
                'mat' => "あり",
                'cleanliness' => "出来立てなのでかなり綺麗",
                'age group' => "サラリーマンが多いので幅広い年齢層",
                'review' => "かるまるレディースデーでととのった〜

                仕事終わりに22日〜23日でコンパクトシングルのお部屋に宿泊
                ケロ→10、8
                岩→8、6、6
                薪→10、10
                蒸→8
                アウフグース→まなみんさん、かな汰さん×2

                今回はどのサウナもタイミングが良く、基本待つことなく入室できました！
                グルシン水風呂の隣が、前は23度くらいだった気がするんだけれど、今回16.5°前後の水風呂になっていて、痒いところに手が届いた気分でした！そうなのよ、このくらいの水風呂が9階に欲しかったのよ。ということで、今回大変お世話になりました。
                岩サウナはオートロウリュ直後にあたったりで、湿度も温度もバッチリの時に入れて、全身で汗かけて気持ちいい！
                ケロサウナもやっぱり気持ちよく汗はかけたのだけれど、マナーがごにょごにょな事があってちょっとだけ残念でした、次に期待！
                大好き薪サウナ！これに入りに来ていると言っても過言ではない。
                薪の匂いと熱の柔らかさ、揺れる炎と音…最高すぎる、薪から出る熱はなんでこんなに肌に当たる感覚が違うのかと、とても気持ちよく過ごせました！
                蒸しサウナは事前予約でゲットできたので、心の準備万端で挑みました！雫爆弾対策にタオルを肩にかけてタルの中へ。あぁ…気分は薬草多めのシュウマイといったところでしょうか、体に良さそうな香りに包まれ、息を吸えば鼻や喉が熱で痛い、でも気持ちいい（笑）しっかり8分間楽しませていただきました！水風呂を出た後も体に香りが残ってるのはあるあるなのでしょうね。

                アウフグースは0時をネットで事前予約、その前に見知らぬステキな女性が「都合合わなくなったので、よければ使いませんか？」とまなみんさんのタグをくださり、お言葉に甘えて参加させていただきました。
                熊本湯らっくすでふだんはされているとのこと！アップテンポな洋楽と壮大な曲で楽しませていただきました。タオル捌きが美しくてとても貴重な体験させて頂きました。
                0時のかな汰さんは、前回デビューで2回目のアウフグースとのこと、深夜なのでアチアチではなく…とおっしゃってましたが十分アチアチで、途中退出される方もちらほら。アウフ終了の挨拶直後、かな汰さんが外で倒れてしまい、大変だぁぁぁと内心慌てましたが、スタッフさんがすぐに対応されていたので一安心。そりゃ、座っているだけのわたしたちがビッショり汗かくんだから、一層だよなぁ…と。翌朝7時のアウフをじゃんけんで勝ち取ったのですが、そこでは元気にタオルを舞わせるかな汰さんが見らてよかったです。

                朝食はいつもの豚汁定食に惹かれつつ、サバ味噌定食！うん、おいしい！ご馳走様でした。
                今回もかるまるお借りしました。",
                'id' => "2",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'store_name' => 'はーとぽーと大内 ぽぽろっこ',
                'place' => '秋田県由利本荘市',
                'regular' => "常連しかいない。地域密着型",
                'TV' => "有り",
                'temperature' => "86℃",
                'water_temperature' => "16℃",
                'width' => "8人",
                'smell' => "少し嫌な匂いがする",
                'congestion' => "17時台が混んでいるが他は比較的空いている",
                'outside_bath' => "ベンチ有り",
                'music' => "テレビの音",
                'mat' => "あり",
                'cleanliness' => "造りは古いが清潔に保たれている",
                'age group' => "50くらいのおっさんが多い",
                'review' => "サウナ：7,10,12分 × 3
                水風呂：1分 × 3
                休憩： 5分 × 3
                合計：3セット

                💬：週一サ活　
                朝ランしてからの昼サ活。
                週末なので、それなりの密を想定していたが浴室は2～3人程度。
                まずは、
                マグマ噴火式泡風呂（勝手にそう呼んでるだけ）で腰と足の疲労を癒し
                最近、泡が大きくなりつつある第2泡風呂で全身のコリをを解して、いざサ室へ。

                サ室は紳士サウナーさん4～5人が、出たり入ったり。
                室温は82°くらいの低め設定。
                下段だと寒くて風邪ひいてしまうので（オリラジ藤森風に）
                3セットすべて上段、体育座り、忍者巻きでじっくり蒸される。

                水風呂は17°くらい？　5月になって水温もちょうど良くなってきた(#^^#)
                これから季節は徐々に暑くなるから、この水温キープして欲しい🙏

                休憩はもちろん外で。
                外気温も20℃くらいで、空は黄砂でかすれていたが、風は心地よく
                1セット目から気持ちよくて、おもわずニヤけてしまう(*´ω`*)
                3セット終了後には、あまみもバッチリ、無我の境地へ(∩´∀｀)∩

                サウナ飯は、喜怒哀楽の『塩支那そば こってり』

                今週もいろいろと苦悩することがあったが、
                サ活とラーメンでもろもろ吹っ飛んだｗｗｗ
                お疲れさまでした。",
                'id' => "8",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'store_name' => 'スパメッツァ おおたか 竜泉寺の湯',
                'place' => '千葉県 流山市',
                'regular' => "常連もいるが新規も多い",
                'TV' => "無し",
                'temperature' => "95℃",
                'water_temperature' => "8.5℃",
                'width' => "36人",
                'smell' => "無し",
                'congestion' => "常に満室。人が外に並んでいる",
                'outside_bath' => "有り。15席ほど",
                'music' => "BGM",
                'mat' => "無し",
                'cleanliness' => "きれい",
                'age group' => "幅広い",
                'review' => "最近話題のサウナで気絶！？

                題名が物騒ですが、サウナレポいきます。

                最近ブログやYouTube等の媒体でサウナやスパ銭を調べていると度々話題なる このスパメッツァおおたか。
                今年の4月にオープンしてここまで爆発的に人気になるんだからと千葉に行く予定に合わせて行くしか無いでしょ！

                バイクで施設に向かい、駐車場はあるとは聞いてはいたが、バイク駐輪場の有無が気になっていたが心配無用で無料のバイク駐輪場があって安心。

                いざ入店。入口に入るとすぐエレベーターと階段。2階フロアにある様なので登っていく。
                オシャレな電光版があり写真パシャリ。📸

                下駄箱を抜けて入店。そこにはお風呂カフェのようなオシャレ空間で、軽く感動。 入ろうと思ったがそこは岩盤浴用のコーナーなので泣く泣くスルー

                入ってみると人が多いのなんの。整い椅子外中15くらいあるのに満席 外にある整いベッドは15程あるのに全て埋まってて、行ったことないけど築地のマグロ売り場を見た気がした。

                サ室はドラゴンサウナ、ロウリュサウナ 塩サウナと3種類あり、どこも人が外で並んでいて
                待機しなければならない。ドラゴンサウナ脇の水風呂には室内に8度の物と18度の物があり ロウリュサウナ脇には立って入れる18度の水
                風呂があって動線は完璧。

                初めはロウリュへ入室……
                部屋はこじんまりとしてて上下段合わせて8人
                ‼️ テレビがない‼️ 最高‼️
                しかも落ち着いた中にどこか楽しげなBGMが流れている！
                テレビも12分計もなく自ら向き合わなくては行けないスタイル……嫌いじゃない……

                体感7分くらいで出て立てる水風呂へ……
                立てる水風呂楽すぎる‼️
                入って座らなくていいから全身がしっかり冷えて羽衣を壊すのも簡単で素晴らしい！
                1分半程で出てそのまま整いベッドへ

                使用中のベッドを目を光らせながら観察して利用者がベッド離れた瞬間
                飢えたハイエナのようにに向かって
                「水かけておくので」と一言 言って略奪
                晴れてベッドに寝ることが出来た。

                体にふきつける風 スピーカーから流れている鳥の声……あ……きもちぇ……

                そのまま整いながらに睡眠に入ってしまいました……

                その15分後ドラゴンやりますという館内放送で目を覚ましドラゴンへ
                残念ながら受けられませんでしたが ロウリュ中の様子を見ると もがき苦しんで居て 塩をかけられたナメクジみたいな人が沢山サ室から出てきました。その後の湿度の高い、いいサウナを7分ほど入り
                8度の水風呂へ40秒程入って体を締めて休憩
                2度目の睡眠を取ってしまいました。

                また行きたいです。",
                'id' => "1",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'store_name' => 'SHONAI HOTEL SUIDEN TERRASSE / スイデンテラス',
                'place' => '山形県 鶴岡市',
                'regular' => "ホテルなんでそれほど常連客はいないかな",
                'TV' => "無し",
                'temperature' => "80℃",
                'water_temperature' => "18℃",
                'width' => "8人",
                'smell' => "木の香りがする",
                'congestion' => "混んでない。いつでも入れる",
                'outside_bath' => "有り",
                'music' => "無し",
                'mat' => "無し",
                'cleanliness' => "所々にサビが、、、",
                'age group' => "幅広い",
                'review' => "両親の故郷を訪ねる秋田・山形の旅。最後は楽しみにしていたここ❤️

                昨日の一日目は、天色の湯。デザイナー設計の浴場で、タイル貼りの浴室は、80歳の母にはどうだったかなぁ？

                夜になってたけど、田んぼの緑が広がる様を眺めつつ、風に吹かれつつ、遠くに電車が走っているのが見えた。これ、双眼鏡持ってたら見える？もしかして(笑)

                #サウナ

                サ室は六角形のキューブが３段に積んだ形をしていて、タオルが敷いてあり、共用ビート板を使う。15分の砂時計。セルフロウリュは15分おきにの指示😊15歳の姪っ子にサウナデビューさせた(笑)ロウリュウすると、３段目はかなり熱い💦 7〜8分ほど我慢して入ってもらい、水風呂に10秒頑張ってもらったら、「夜布団に入って眠りに落ちる前の気分〜」と言っていた姪っ子🌈無事ととのえたらしい😊

                サ室のガラス窓に、カエルが張り付いていた
                🐸熱くないのかな？

                翌日は月白の湯へ🌈
                風呂場は床がコンクリのままのデザイナー仕様😊母、大丈夫だったかな？

                湯船と水田の泥水と目線がインフィニティ🐸
                泥の香りを嗅ぎながらお風呂に入るなんて、初めて❣️私は風情があって好き❤️泥の水面に、脇の土手の緑が映って綺麗🌈 サ室は10分も入ると玉の汗がジャンジャン流れ落ちる〜

                #水風呂
                シャワーで流してから水田脇の水風呂に😊　たしかに、昨日の水風呂より冷たかったかも
                天色の湯は、サ室脇にあり、階段を登って入る仕様。2人でいっぱい。母が、広い浴槽が全部水風呂と勘違いして入らなかったらしい😅実は私も最初間違えそうになった(笑)

                #休憩スペース

                月白の湯は長いベンチ仕様の壁際の椅子。他にサウナで休憩してる人が誰もいなかったから、寝転んで存分にととのいました😊

                天色の湯は、タイル貼りの壁際横長ベンチ。こちらも人が少なければ横になれそうだけど、利用者がそれなりにいたので、座って整いました❤️

                天窓のついた、朱鷺色の湯にも行ってみた。総タイル貼りで、キラキラタイルがアトラクション風😆


                浴室が開く朝の6時過ぎには人が押し寄せて、ロッカーの籠はいっぱい状態だったけど、サ室を利用する人はあまりいなかったので、快適に過ごせて感謝🌈


                とてもとても、人のクリエイティビティーを感じた空間だった🌈　ライブラリーの本の選び方も、とてもクリエイティブ😊


                ただ、私的には昨日の道の駅象潟(きさかた)ねむの丘の、雄大な日本海が忘れられない〜〜〜

                山形県鶴岡までサ旅の方、ぜひ秋田の象潟(きさかた)まで特急いなほで51分(車で35分)足延ばして、日帰りで海のサウナを体験してみてね〜〜〜🌈
                ",
                'id' => "9",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'store_name' => '琉球温泉 龍神の湯',
                'place' => '沖縄県 豊見城市',
                'regular' => "テスト",
                'TV' => "テスト",
                'temperature' => "100℃",
                'water_temperature' => "20℃",
                'width' => "10人",
                'smell' => "テスト",
                'congestion' => "テスト",
                'outside_bath' => "テスト",
                'music' => "テスト",
                'mat' => "テスト",
                'cleanliness' => "テストテスト",
                'age group' => "テスト",
                'review' => "テストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテスト
                ",
                'id' => "3",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'store_name' => 'タザワコサウナ',
                'place' => '秋田県 仙北市',
                'regular' => "テスト",
                'TV' => "テスト",
                'temperature' => "100℃",
                'water_temperature' => "20℃",
                'width' => "10人",
                'smell' => "テスト",
                'congestion' => "テスト",
                'outside_bath' => "テスト",
                'music' => "テスト",
                'mat' => "テスト",
                'cleanliness' => "テストテスト",
                'age group' => "テスト",
                'review' => "テストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテスト
                ",
                'id' => "7",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'store_name' => 'タザワコサウナ',
                'place' => '秋田県 仙北市',
                'regular' => "テスト",
                'TV' => "テスト",
                'temperature' => "100℃",
                'water_temperature' => "20℃",
                'width' => "10人",
                'smell' => "テスト",
                'congestion' => "テスト",
                'outside_bath' => "テスト",
                'music' => "テスト",
                'mat' => "テスト",
                'cleanliness' => "テストテスト",
                'age group' => "テスト",
                'review' => "テストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテスト
                ",
                'id' => "7",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'store_name' => 'タザワコサウナ',
                'place' => '秋田県 仙北市',
                'regular' => "テスト",
                'TV' => "テスト",
                'temperature' => "100℃",
                'water_temperature' => "20℃",
                'width' => "10人",
                'smell' => "テスト",
                'congestion' => "テスト",
                'outside_bath' => "テスト",
                'music' => "テスト",
                'mat' => "テスト",
                'cleanliness' => "テストテスト",
                'age group' => "テスト",
                'review' => "テストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテスト
                ",
                'id' => "10",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'store_name' => 'タザワコサウナ',
                'place' => '秋田県 仙北市',
                'regular' => "テスト",
                'TV' => "テスト",
                'temperature' => "100℃",
                'water_temperature' => "20℃",
                'width' => "10人",
                'smell' => "テスト",
                'congestion' => "テスト",
                'outside_bath' => "テスト",
                'music' => "テスト",
                'mat' => "テスト",
                'cleanliness' => "テストテスト",
                'age group' => "テスト",
                'review' => "テストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテスト
                ",
                'id' => "9",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'store_name' => 'タザワコサウナ',
                'place' => '秋田県 仙北市',
                'regular' => "テスト",
                'TV' => "テスト",
                'temperature' => "100℃",
                'water_temperature' => "20℃",
                'width' => "10人",
                'smell' => "テスト",
                'congestion' => "テスト",
                'outside_bath' => "テスト",
                'music' => "テスト",
                'mat' => "テスト",
                'cleanliness' => "テストテスト",
                'age group' => "テスト",
                'review' => "テストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテスト
                ",
                'id' => "7",
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
