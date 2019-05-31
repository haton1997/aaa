<?php
$cities=array('ha noi','ho chi minh','da nang','can tho');
echo '<br> Mảng ngoài hàm phạm vi toàn cục $cities';
echo'<pre>';
print_r($cities);
echo'</pre>';

function filterCities(&$cities_arg){
    foreach ($cities_arg as $key=>$value){
        if(substr($value,0,1)!='h')
        {
            unset($cities_arg[$key]);
        }
    }
    echo '<br>Trong hàm mảng có phạm vi cục bộ $cities_arg:';
    echo'<pre>';
    print_r($cities_arg);
    echo'</pre>';
    return $cities_arg;
}

filterCities($cities);
echo '<br>Ngoài hàm trong phạm vi toàn cục và đã chạy qua hàm filterCity $cities';
echo'<pre>';
print_r($cities);
echo'</pre>';