<?php 
    // 足し算をする関数を定義
    function plus($num1, $num2) {
        $result = $num1 + $num2;
        return $result;
    }
    // 引き算をする関数を定義
    function minus($num1, $num2) {
        $result = $num1 - $num2;
        return $result;
    }

    // 掛け算をする関数の定義
    function multi($num1, $num2) {
        $result = $num1 * $num2;
        return $result;
    }
    // 割り算をする関数の定義
    function divide($num1, $num2) {
        $result = $num1 / $num2;
        return $result;
    }

    // ADVANCE
    // 四則演算すべてができるcalc関数を定義
    // この際ブラウザ上のフォームの入力は3つ
    // 数字1、数字2、四則演算選択
    // 関数の引数も3つ
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
    
    // フォームがget送信されると関数を実行し
    // 結果を出力します
    if (!empty($_GET)) {
        // フォームに入力した値はどこに？
        // inputタグのname属性をキーに、$_GETに格納されている
        // ひとつ目のinputタグの値は$_GET['num1']
        // ふたつ目のinputタグの値は$_GET['num2']
        // ひとつ目の数字
        $num1 = $_GET['num1'];
        // ふたつ目の数字
        $num2 = $_GET['num2'];

        //計算方法
        $calc_method = $_GET['calc_method'];

        // 関数実行
        //echo plus($num1, $num2);
        echo calc($num1, $num2, $calc_method);
    }
?>

<!-- HTMLでフォームを作成 -->
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>計算機サンプル</title>
</head>
<body>

  <form action="" method="get">
    <div>
      <input type="text" name="num1">

      <select name="calc_method">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="x">x</option>
        <option value="/">/</option>
      </select>
      
      <input type="text" name="num2">
    </div>
    <input type="submit" value="計算">
  </form>

</body>
</html>




