<?php
    echo "[課題1]";
    function int($num){
        $result = $num*2;
    return $result;    
    }
    echo int(6);
?>

<?php
    echo"[課題2]";
    function sum($a,$b){
        $result = $a +$b;
        return $result;
    }
    echo sum(4,9);
?>

<?php
    echo"[課題3]";
    function jozan($arr){
        $result = 1;
        foreach($arr as $num){
            $result =  $result*$num;
        }
    return $result;
    }
    echo jozan(array(1,3,5,7,9));
?>

<?php
    echo "[課題4]";
    
    function max_array($arr){
        // とりあえず配列の最初の要素を一番大きい値とする
        $max_number = $arr[0];
        foreach($arr as $a){
            if($max_number < $a){
                $max_number = $a;
            }
        }
        return $max_number;
    }
        echo max_array(array(1000,1,5,5,7,10,10,20,100,200,10000));
    ?>
    
<?php
    echo"[課題5]";
        
    $text = '<p>Test paragrah.</p><!-- Comment --> <a href="#fragment">Other text</a>';
    echo strip_tags($text); 
    echo "\n";
    
    $fruit = array("orange", "apple");
    array_push($fruit, "banana", "grape");
    print_r($fruit);
    
    $array1 = [1,2,3];
    $array2 = [10,20,30];
    $array3 = [100,200,300];
    
    $array = array_merge($array1, $array2, $array3);
    print_r ($array);
    
    $array4 = ["Tatsuya", "Akari"];
    $array5 = ["Atsushi", "Kouki"];
    $array6 = ["Yamato", "Masato", "Takahiro"];
    
    $array_result = array_merge($array4, $array5, $array6);
    print_r ($array_result);
    
    $week = "現在のUnixタイムスタンプ".time();
    $nweek = time() + (3 * 24* 60 * 60);
    
    echo "3日後のUnixタイムスタンプ:".$nweek;
    echo "\n";
    
    $time_stamp = mktime(0, 0, 0, 7, 20, 2020);
    echo "今日のUnixスタンプ:".$time_stamp;
    
    echo "\n";
    
    echo date('Y/m/d');
    echo "\n";
    
    echo date('Y/m/d H:i:s');
?>