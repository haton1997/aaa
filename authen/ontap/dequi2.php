<?php
/**
 * Đệ quy trong PHP là bản thân 1 hàm gọi lại chính nó cho đến khi
 * đạt được mục đích nào đó
 * mà kết quả của bước này là đầu vào của bước tiếp theo
 * Ví dụ:
 * Kết quả của bước 1 là đầu vào của bước 2
 * Kết quả của bước 2 là đầu vào của bước 3
 * Kết quả của bước 3 là đầu vào của bước 4
 * Chúng ta se có điều kiện dừng khi đạt được kết quả
 */

/*
 *In ra 1 tam giác các ngôi sao mà mỗi dòng từ 1 * và kết thúc 100*
 * *
 * **
 * ***
 * n*
 * 100*
 */
function printStar($n)
{
    for ($i=$n;$i>0;$i--)
    {
        echo "<br>".str_repeat('*',$i);
    }
}
//printStar(100);

/*
 * Đệ quy
 */
function printStarDeQuy($n,$i){
    echo "<br>".str_repeat('*',$i);
    if($i>0)
    {
        $i--;
        printStarDeQuy($n,$i);
    }
}
printStarDeQuy(100,100);
