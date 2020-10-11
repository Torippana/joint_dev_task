# 課題の回答は このファイル をご利用下さい。
# 回答の出力を確認される際は，「php task.php」をターミナルから実行して下さい。
<?php
print("#####q1#####".PHP_EOL);
$names = ["田中", "佐藤", "佐々木", "高橋"];
array_push($names, '斎藤');
print_r($names);
echo PHP_EOL;

print("#####q2#####".PHP_EOL);
$array1 = ["dog", "cat", "fish"];
$array2 = ["bird", "bat", "tiger"];
$array = array_merge($array1,$array2);
print_r($array);
echo PHP_EOL;

print("#####q3#####".PHP_EOL);
$numbers = [1, 5, 8, 10, 2, 3, 2, 3, 3, 1, 4, 5, 9];
$count = 0;
foreach($numbers as $number) {
  if ($number === 3) {
    $count++;
  }
}
echo $count;
echo PHP_EOL;

print("#####q4#####".PHP_EOL);
$sports = ["サッカー", "フットサル", null, "野球", "バスケ", null, "バレー"];
$sports = array_filter($sports);
print_r($sports);
echo PHP_EOL;

print("#####q5#####".PHP_EOL);
$array1 = [];
$array2 = [1, 5, 8, 10];
var_export(empty($array1));
var_export(empty($array2));
echo PHP_EOL;

print("#####q6#####".PHP_EOL);
$numbers1 = [1, 2, 3, 4, 5];
$numbers2 = [];
foreach ($numbers1 as $number) {
  $numbers2[] = $number * 10;
}
print_r($numbers2);
echo PHP_EOL;

print("#####q7#####".PHP_EOL);
$array = ["1", "2", "3", "4", "5"];

foreach ($array as $index => $value) {
    $array[$index] = (int) $value;
}
print_r($array);
echo PHP_EOL;

print("#####q8#####".PHP_EOL);
$programming_languages = ["php","ruby","python","javascript"];
$programming_languages = array_map('ucfirst', $programming_languages);;
$upper_case_programming_languages = array_map('strtoupper', $programming_languages);
  # 以下は変更しないで下さい
print_r($programming_languages);
echo PHP_EOL;
print_r($upper_case_programming_languages);

echo PHP_EOL;

print("#####q9#####".PHP_EOL);
$names = ["田中", "佐藤", "佐々木", "高橋"];
foreach ($names as $index => $name) {
  $member_num = $index + 1;
  $names[$index] = '会員No.' . $member_num . ' '. $name;
}
print_r($names);
echo PHP_EOL;

print("#####q10#####".PHP_EOL);
$foods = ["いか","たこ","うに","しゃけ","うにぎり","うに軍艦","うに丼"];
foreach ($foods as $food) {
  if (strpos($food,"うに") !== false) {
    echo $food . ' : 好物です';
    echo PHP_EOL;
  } else {
    echo $food . ' : まぁまぁ好きです';
    echo PHP_EOL;
  }
}
echo PHP_EOL;

print("#####q11#####".PHP_EOL);
$sports = ["サッカー", "バスケ", "野球", ["フットサル", "野球"], "水泳", "ハンドボール", ["卓球", "サッカー", "ボルダリング"]];
$display_array = [];
$template = "No%d %s";
echo "ユーザーの趣味一覧";
echo PHP_EOL;
foreach ($sports as $index => $sport_main) {
  $rank_num = $index;
  if (is_array($sport_main)) {
    foreach ($sport_main as $sport_sub) {
      if(!in_array($sport_sub, $display_array)) {
        $rank_num++;
        echo sprintf($template, $rank_num, $sport_sub);
        echo PHP_EOL;
        array_push($display_array, $sport_sub);
      }
    }
  } elseif(!is_array($sport_main) && !in_array($sport_main, $display_array)) {
      $rank_num++;
      echo sprintf($template, $rank_num, $sport_main);
      echo PHP_EOL;
      array_push($display_array, $sport_main);
  }
}
echo PHP_EOL;

print("#####q12#####".PHP_EOL);
$data = [ "user" => [ "name" => "satou", "age" => 33 ] ];
print_r($data["user"]["name"]);
echo PHP_EOL;

print("#####q13#####".PHP_EOL);
$user_data = [ "name" => "神里", "age" => 31, "address" => "埼玉"];
$update_data = [ "age" => 32, "address" => "沖縄" ];
$user_data = array_replace($user_data, $update_data);
print_r($user_data);
echo PHP_EOL;

print("#####q14#####".PHP_EOL);
$data = [ "name" => "satou", "age" => 33, "address" => "saitama", "hobby" => "soccer", "email" => "hoge@fuga.com" ];
$data_array = [];
foreach ($data as $each_data) {
  array_push($data_array, $each_data);
}
print_r($data_array);
echo PHP_EOL;

print("#####q15#####".PHP_EOL);
$data1 = [ "name" => "saitou", "hobby" => "soccer", "age" => 33, "role" => "admin" ];
find_age_key($data1);
$data2 = [ "name" => "yamada", "hobby" => "baseball", "role" => "normal" ];
find_age_key($data2);
function find_age_key($array) {
  if (array_key_exists('age', $array)) {
    echo 'OK';
    echo PHP_EOL;
  } else {
    echo 'NG';
    echo PHP_EOL;
  }
}
echo PHP_EOL;

print("#####q16#####".PHP_EOL);
$users = [
  [ "name" => "satou", "age" => 22 ],
  [ "name" => "yamada", "age" => 12 ],
  [ "name" => "takahashi", "age" => 32 ],
  [ "name" => "nakamura", "age" => 41 ]
];
$template = "私の名前は%sです。年齢は%d歳です。";
foreach ($users as $user) {
  echo sprintf($template, $user['name'], $user['age']);
  echo PHP_EOL;
}

echo PHP_EOL;

print("#####q17#####".PHP_EOL);
class User
{
  private $name;
  private $age;
  private $gender;

  public function __construct($name, $age, $gender){
      $this->name = $name;
      $this->age = $age;
      $this->gender = $gender;
  }
  public function info() {
      echo "名前:".$this->name;
      echo PHP_EOL;
      echo "年齢:".$this->age;
      echo PHP_EOL;
      echo "性別:".$this->gender;
      echo PHP_EOL;
  }
}

$user1 = new User("神里",32,"男");
$user2 = new User("あじー",32,"男");

$user1->info();
print("-------------".PHP_EOL);
$user2->info();
echo PHP_EOL;

print("#####q18#####".PHP_EOL);

  class Man {
    const ADULT_AGE  = 20;
    const TEMPLATE_1 = 'こんにちは，%sと申します。宜しくお願いいたします。';
    const TEMPLATE_2 = 'はいさいまいど〜，%sです！！！';
    private $name;
    private $age;

    public function __construct($name, $age) {
      $this->name = $name;
      $this->age = $age;
    }

    public function introduce() {
      if ($this->age >= self::ADULT_AGE) {
        echo sprintf(self::TEMPLATE_1, $this->name);
        echo PHP_EOL;
      } else {
        echo sprintf(self::TEMPLATE_2, $this->name);
        echo PHP_EOL;
      }
    }
  }

$man1 = new Man("あじー",32);
$man2 = new Man("ゆたぼん",10);

$man1->introduce();
$man2->introduce();

echo PHP_EOL;

print("#####q19#####".PHP_EOL);
class Item{
  # 以下を修正して下さい

  public $name;

  function __construct($book_name){
    $this->name = $book_name;
  }
}
  # 以下は変更しないで下さい

$book = new Item("ゼロ秒思考");
print($book->name.PHP_EOL);

echo PHP_EOL;

print("#####q20#####".PHP_EOL);
class Human
{
  public $name;
  public $age;

  public function __construct($name, $age) {
    $this->name = $name;
    $this->age = $age;
  }
}

class Zoo
{
  protected $zoo_name;
  protected $fee_array;
  const TEMPLATE = "%sさんの入場料金は %d 円です。";

  public function __construct($zoo_name, $fee_array = []) {
    $this->zoo_name = $zoo_name;
    $this->fee_array = $fee_array;
  }
  public function info_entry_fee($human) {
    // objectのプロパティにageとnameが存在するかチェック
    if (is_object($human) && (property_exists($human,'age') && property_exists($human,'name'))) {
      $fee_type = $this->check_human_fee_type($human->age);
      // ageが年齢の区分に該当する & 年齢区分の配列に同名のキーが存在する
      if ($fee_type !== '' && isset($this->fee_array[$fee_type])) {
        echo sprintf(self::TEMPLATE, $human->name, $this->fee_array[$fee_type]);
        echo PHP_EOL;
      }
    }
  }
  // ageから入園料区分を割り出す関数
  public function check_human_fee_type($age) {
    $type = '';
    switch ($age) {
      case $age > 0 && $age <= 5:
        $type = 'infant';
        break;
      case $age > 5 && $age <= 12:
        $type = 'children';
        break;
      case $age > 12 && $age <= 64:
        $type = 'adult';
        break;
      case $age > 64 && $age <= 120:
        $type = 'senior';
        break;
      default:
        $type = '';
        break;
    }
    return $type;
  }
}

$zoo = new Zoo("旭山動物園",[ "infant" => 0, "children" => 400, "adult" => 800, "senior" => 500]);

$human1 = new Human("たま",3);
$human2 = new Human("ゆたぼん",10);
$human3 = new Human("あじー",32);
$human4 = new Human("ぎん",108);

$humans = [ $human1, $human2, $human3, $human4 ];

foreach($humans as $human){
  $zoo->info_entry_fee($human);
}

echo PHP_EOL;
