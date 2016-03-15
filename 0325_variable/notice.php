<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title></title>
    <style>
      h1, footer { text-align:center; }
      div { width: 650px; margin: 0 auto; }
      p.text-right { text-align:right }
    </style>
  </head>
  <body>



  <h1>
<?php
$message = 'サンプルカンパニー';

echo '株式会社';
echo $message;
echo 'から工事のお知らせ';

?>
</h1>

    <div>
      <p>拝啓　時下ますますご清祥のこととお喜び申し上げます。<p>
      <p>さて、皆様がお住まいの○○○○において、○○○○工事を下記のとおり行います。</p>
      <p>
        期間中は搬入のためのエレベーター使用、および工事による騒音・振動の発生が予想されます。ご入居者様には大変ご迷惑をおかけいたしますが、何卒ご容赦くださいますようお願い申し上げます。また、工事中何かお気づきの点がございましたら弊社までご連絡ください。<br>
        何卒、ご理解ご協力の程お願い申し上げます。
      </p>
      <p class="text-right">敬具<p>
      <p>
        問い合わせ先<br>
<?php
$message = 'サンプルカンパニー';

echo '株式会社';
echo $message;
?>
<br>
        担当　◯◯ ◯◯<br>
        TEL　03-0000-0000
      </p>
    </div>
    <hr>
    <footer>&copy;
<?php
$message = 'サンプルカンパニー';
echo '株式会社';
echo $message;
?>
</footer>
  </body>

</html>
