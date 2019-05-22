<?php

require_once(__DIR__.'/config.php');
require_once(__DIR__.'/Bingo.php');

$bingo = new \MyApp\Bingo();
$nums = $bingo->create();

/***ビンゴシートのルール

B: $nums[0] 1-15
I: $nums[1] 16-30
N: $nums[2] 31-45＊真ん中はなし（FREE）
G: $nums[3] 46-60
O: $nums[4] 61-75

$nums[i] $i * 15 +1 〜 $i * 15 + 15
ビンゴシートのルールここまで***/

 ?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>ビンゴシート</title>
  <link rel="stylesheet" href="style.css"
</head>
<body>
  <div id="container">
    <table>
      <tr>
        <th>B</th><th>I</th><th>N</th><th>G</th><th>O</th>
      </tr>
      <?php for($i = 0; $i < 5; $i++) : ?>
        <tr>
          <?php for($j = 0; $j < 5; $j++) : ?>
            <td><?php echo h($nums[$j][$i]); ?></td>
          <?php endfor; ?>
        </tr>
      <?php endfor; ?>
    </table>
  </div>
</body>
</html>
