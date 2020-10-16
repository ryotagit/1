<?php
echo 'huga';
?>

<?php
$foo = 'Bob';              // 値'Bob'を$fooに代入する。
$bar = &$foo;              // $fooを$barにより参照
$bar = "My name is $bar";  // $barを変更...
echo $bar;
echo $foo;                 // $fooも変更される。
?>

<?php
  // 配列を作成できる、変数に代入できる、上書きできる

  $names = array('ryota','takasi','hideki');
  echo $names[0];
  echo "$names[3]\n";
  echo "$names[1]\n";


  $names[] = 'naoko';
  echo $names[3];

  $names[0] = 'bob';
  echo $names[0];
?>


<?php
  //  連想配列

  $user = array(
   'name' => 'sakurai',
   'age' => 23,
   'gender' => 'man'

  );

  echo $user;
  echo $user[0];
  echo $user['name'];
  $user['age'] = 3;
  echo $user['age'];


?>