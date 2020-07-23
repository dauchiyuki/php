<?php
    echo "[課題1]";
    $name = 'Yuki';
    if ($name == 'Yuki') {
        echo '私はあなたの名前です';
    }
    else {
        echo '私はあなたの名前ではありません';
    }
?>

<?php
    echo "[課題2]";
    $total = 0;
    for ($i = 1;$i <= 10000;$i++){
    $total += $i;
    }
    echo $total;
?>

<?php
    echo "[課題3]";
    $fruits = array("apple","banana","grape","orange","melon");
    foreach($fruits as $fruit){
        echo $fruit." ";
    }
?>

<?php
    echo "[課題4]";
    /* for文の始めの値を定義する */
    $start = 1;
    /* for文の終わりの値を定義する */
    $end = 100;

    for($i = $start; $i <= $end; $i++){

    // 5で割り切れたら{}内を実行する
     if($i % 5 == 0){
     echo $i." ";
    }
}

?>