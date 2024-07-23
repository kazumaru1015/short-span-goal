<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>calender</title>
</head>
<body>
  <form action="#" method="get"><!--action属性の中にデータをどこに送るか-->
    <select name="year">
      <?php
      $year = 1950; // スタートの年数
      while( $year < 2100) {
        echo "<option>". $year. "</option";
        $year++ // htmlでselect属性があるため改行用のタグはいらない
      } // ここで一度phpを閉じる
      ?> 
    <select name="month" >
      <?php
      $month = 1; // 始まりは1月から
      while( $month < 13) {
        echo "<select>". $month. "</select>";
        $month++;
      }
      ?>
    <input type="submit" value="送信ボタン">
  </form>


</body>
</html>
