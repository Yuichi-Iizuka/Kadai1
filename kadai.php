

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>fizzbuzz</title>
</head>

<body>
 <!-- 数値を入力するフォーム -->
  <form method='post'>
    <p>fizznum:</p>
    <input type="text" name='fizznum'>
    <p>buzznumm:</p>
    <input type='text' name='buzznum'>
    <input type='submit' name='submit' value='送信'>
    <br><br>

    <?php
    // 「送信」されたら数値を受け取る
    if ($_POST['submit']) {
      $fizz = $_POST['fizznum'];
      $buzz = $_POST['buzznum'];
      // どちらかの数値が０だった場合、以下の処理を実行
      if ($fizz == 0 || $buzz == 0) {
        echo '整数１以上を入力してください';
        return;
        // 数値が文字列か数値か判定する
      } elseif (ctype_digit($fizz) && ctype_digit($buzz)) {
        // ループ処理を実行
        for ($i = 1; $i < 100; $i++) {
          if ($i % $fizz == 0 && $i % $buzz == 0) {
            echo '<br>' . 'fizzbuzz;' . $i;
          } elseif ($i % $fizz == 0) {
            echo '<br>' . 'fizz;' . $i;
          } elseif ($i % $buzz == 0) {
            echo '<br>' . 'buzz;' . $i;
          }
        }
      }else{
        echo '小数点が含まれています';
      }
    }





    ?>
</body>

</html>