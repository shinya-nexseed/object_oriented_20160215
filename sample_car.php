<?php 

//Carクラスのインスタンス化
$car = new Car(0);
// クラス外からプロパティにアクセス
// $car->speed = -100;

$car->setSpeed(100);
$car->start();
$car->run();

// プロパティをprivateにすると、クラスの外で呼び出すことができない
// echo '時速' . $car->speed . 'km/hで走っています<br>';
echo '時速' . $car->getSpeed() . 'km/hで走っています<br>';

class Car{
  	// 時速プロパティ
  	// public $speed;
    private $speed;

    // 各プロパティに初期値を設定する
    function __construct($jisoku) {
        $this->speed = $jisoku;
    }

  	// 時速を設定する
  	function setSpeed($jisoku){
        // 時速が0 ~ 500の間で指定されているかどうか
        if ($jisoku >= 0 && $jisoku <= 500) {
            $this->speed = $jisoku;
        } else {
            $this->speed = 0;
        }
  	}

    // クラス外からspeedプロパティの値を呼び出すため
    function getSpeed() {
        return $this->speed;
    }



  	function start(){
  		  echo 'エンジンをかけました<br>';
  	}

	  // 走る
  	function run(){
      	echo '走り出しました<br>';
      	// 時速を表示させる処理を呼び出します
      	$this->showSpeed();
  	}

  	// 時速を表示する
  	private function showSpeed(){
    	echo '時速' . $this->speed . 'km/hで走っています<br>';
  	}

  	// 止まる
  	function stop(){
    	echo '止まりました<br>';
  	}
}


?>
