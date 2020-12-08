<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>fizzbuzz</title>
</head>

<body>
  <!-- 数値を入力するフォーム -->
  <form method="post">
    <p>fizznum:</p>
    <input type="text" name="fizznum">
    <p>buzznumm:</p>
    <input type="text" name="buzznum">
    <input type="submit" name="submit" value='送信'>
    <br><br>
  </form>


  <?php
  // 「送信」されたら数値を受け取る
  if (!empty($_POST['submit'])) {
    // 全角を半角に変換する処理
    $fizznum = mb_convert_kana($_POST['fizznum'], 'rn');
    $buzznum = mb_convert_kana($_POST['buzznum'], 'rn');
    //文字か少数かを判定、そうであった場合は以下を処理
    if (!ctype_digit($fizznum) || !ctype_digit($buzznum)) {
      echo '整数を入力してください';
    } else {
      // 数値型にキャストして代入する処理
      $fizz = (int)$fizznum;
      $buzz = (int)$buzznum;
    }

    for ($i = 1; $i < 100; $i++) {
      if ($i % $fizz == 0 && $i % $buzz == 0) {
        echo '<br>' . 'fizzbuzz;' . $i;
      } elseif ($i % $fizz == 0) {
        echo '<br>' . 'fizz;' . $i;
      } elseif ($i % $buzz == 0) {
        echo '<br>' . 'buzz;' . $i;
      }
    }
  }


  ?>

</body>

</html>