<?php

  // constructを実装できる

  class Human {
    private $name;
  
    // コンストラクタ
    public function __construct($name){
        $this->name = $name;
    }

    function show() {
        echo $this->name;
    }
  }
  
  $human = new Human("山田太郎");
  $human->show();
  

  // constructは新たにインスタンスを生成する度に呼び出され、引数を渡し、クラス内に定義したプロパティの初期化などに使用される。

 ?> 

<?php
  // destructの実装ができる

  class TestClass {
  function __destruct() {
    print "TestClass END!!\n";
  }
  }

  $obj = new TestClass();
  $obj = NULL;
  print "PHP END!!\n"

  // 変数「$obj」にNULLをセットした時点でデストラクタが呼び出される。
?>