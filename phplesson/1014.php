<?php
  class クラス名 {
    static $クラス変数名;
  }
  // staticでクラス変数名を指定

  class クラス名 {
    $インスタンス変数名;
  }
  // staticをつけないとインスタンス変数の指定


  
  class Simple{
   public $a = 'hellow'; // プロパティの宣言ができる
  
   // メソッドの宣言(インスタンスメソッド)
   public function hellow() {
    echo $this->a;
   }

  //  クラスメソッド(statoicを加えた)
   public static function hellow() {
    echo $this->a;
   }
  }

?>