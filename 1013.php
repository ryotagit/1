<?php
//  一般的な制御文(if、for、foreach、while文など)が利用できる

 $x =10;
 if ($x == 10){
 echo 'xは10です';
 }elseif($x < 10){
 echo 'xは１0以下です';
 }else{
 echo'xは10以上です';
}

 echo '<br>';

 for($i=1;$i<=10;$i++){
   echo $i;
 }
 echo '<br>';

 $y = 1;
 while($y <= 10){
  echo $y;
  $y++;
  if($y>6){
  break;
  }
 }
 echo '<br>';

 $towns = array('tokyo','ibaraki','kyoto');

 foreach ($towns as $town){
  echo $town."\n";
  // echo '<br>';
 }
 echo $towns[2]."\n";

?>

<?php
  // 連想配列のforeach

  $users = array(
    'name' => 'sakurai',
    'age' => 23,
    'gender' => 'man'
  );
  

 foreach ($users as $key => $value){
  echo $key.' ';
  echo $value;
  echo "\n";
 }


?>

<?php
//  組み込み関数count
 echo count($towns);

//  関数を作るfunction
 function hello(){
   echo 'こんにちは！';
 }
 hello();

//  引数 3と5が引数
 function num($num1,$num2){
   echo $num1 + $num2;
 }

 num(3,5);
 echo "\n";

//  戻り値
 $sum = getSum(5,6);
 echo $sum;

 function getSum($a,$b){
   return $a + $b ;
 }

?>

<?php 
  // 参照渡し値渡し

  function atai($c){
    echo "加算前　".$c."\n";
    $c +=10;
  }

  function sansyo(&$c){
    echo "加算前　".$c."\n";
    $c +=10;
    echo '参照渡しは変数$sujiが変わる'."\n";
  }

?>

<?php 
  $suji=10; 

  atai($suji);
  echo $suji."\n";

  sansyo($suji);
  echo $suji."\n";
  
?>

<?php 
  // オブジェクトについて理解し、変数に代入することができる、上書きできる
  $hoge = (object)[];
  // $nameはメンバー変数classは設計図
Class Product{
  public $name;
  public $stock;
  }

  // newによりProductを実体化
  $karaage = new Product();
  $karaage->name = "カラアゲ";
  $karaage->stock = 20;
  $karaage->name = "からあげ";

  echo $karaage->name . $karaage->stock;
?>