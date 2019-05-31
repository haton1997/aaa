<?php
/*
 *F(n)
 * n=0=>F(0)=0
 * n=1=>F(1)=1
 * n>1=>F(n)=F(n-1)+F(n-2)
 * 10 số fibonacci đầu tiên(Số sau bằng 2 số trước cộng lại)
 * F(0)=>0
 * F(1)=>1
 * F(2)=>1
 * F(3)=>2
 * F(4)=>3
 * F(5)=>5
 * F(6)=>8
 * F(7)=>13
 * F(8)=>21
 * F(9)=>34
 * F(10)=>55
 * 0,1,1,2,3,5,8,12,21,34,55
 */

function fibonacci($n){
    if($n==0){
        return 0;
    }
    elseif ($n==1){
        return 1;
    }
    else{
        return fibonacci($n-1)+fibonacci($n-2);
    }

}

$p=array();
for($i>0;$i<15;$i++)
{
    $f=fibonacci($i);
    $p[]=$f;
    echo "<br> Tính f($i)=".$f;
}

echo '<br> Dãy fibo 15 số đầu tiên:'.implode(',',$p);