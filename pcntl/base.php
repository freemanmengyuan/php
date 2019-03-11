<?php
// 多进程
$pid = pcntl_fork();
if( $pid > 0 ){
        echo "我是父亲".PHP_EOL;
} else if( 0 == $pid ) {
        echo "我是儿子".PHP_EOL;
        exit;
} else {
        echo "fork失败".PHP_EOL;
}



// 初始化一个 number变量 数值为1 说明子进程拥有父进程的数据副本
$number = 1;
$pid = pcntl_fork();
if( $pid > 0 ){
    $number += 1;
    echo "我是父亲，number+1 : { $number }".PHP_EOL;
} else if( 0 == $pid ) {
    $number += 2;
    echo "我是儿子，number+2 : { $number }".PHP_EOL;
    exit;
} else {
    echo "fork失败".PHP_EOL;
}


// pcntl_fork()配合for循环来做些东西
for( $i = 1; $i <= 3 ; $i++ ){
    $pid = pcntl_fork();
    if( $pid > 0 ) {
            // do nothing ...
    } else if( 0 == $pid ) {
        echo "儿子".PHP_EOL;
        exit;
    }
}
