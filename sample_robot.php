<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  </head>
  <body>

<?php 

//Robotクラスのインスタンス化
$doraemon = new Robot('ドラえもん', 'どら焼き');
$doramichan = new Robot('ドラミちゃん', 'パンケーキ');

// クラスから生成したインスタンスにあるプロパティに直接アクセスして値を代入
// $doraemon->name = 'ドラえもん';
// $doraemon->food = 'どら焼き';

// クラスから生成したインスタンスにあるメソッド経由でプロパティに値を代入
// $doraemon->setName('ドラえもん');
// $doraemon->setFood('どら焼き');

//$doraemon->talk();
//$doraemon->eat();

$doraemon->greeting();
$doramichan->greeting();

class Robot{
  	// public $name;
    //  public $food;
    private $name;
    private $food;

    function __construct($namae, $tabemono) {
        $this->name = $namae;
        $this->food = $tabemono;
    }

    // 名前を設定する
    function setName($namae) {
        $this->name = $namae;
    }

    function getName() {
        return $this->name;
    }

    // 食べ物を設定する
    function setFood($tabemono) {
        $this->food = $tabemono;
    }

    function getFood() {
        return $this->food;
    }

    // talkメソッド追加
    private function talk(){
        echo 'こんにちは、僕の名前は'.$this->name.'です。<br />';
    }

    // eatメソッド追加
    private function eat(){
        echo '好きな食べ物は' . $this->food . 'です<br>';
    }

    function greeting(){
        $this->talk();
        $this->eat();
    }

    function calc($num1,$num2,$method){
        switch ($method) {
            case '+':
                //return $num1 + $num2;
                return plus($num1,$num2);
                break;
            case '-':
                return minus($num1,$num2);
                break;
            case 'x':
                return multi($num1,$num2);
                break;
            case '/':
                return divide($num1,$num2);
                break;
            default:
                //計算方法が不明な場合、足し算の結果を返す
                return plus($num1,$num2);
                break;
        }
    }
}

?>
</body>
</html>
