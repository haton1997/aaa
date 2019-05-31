<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
$danhmuc=array();

$danhmuc[]=array('id'=>1,'name'=>'Điện tử','parent_id'=>0,'level'=>0);
$danhmuc[]=array('id'=>2,'name'=>'Điện lạnh','parent_id'=>0,'level'=>0);
$danhmuc[]=array('id'=>3,'name'=>'Gia dụng','parent_id'=>0,'level'=>0);
$danhmuc[]=array('id'=>4,'name'=>'Mẹ và bé','parent_id'=>0,'level'=>0);

$danhmuc[]=array('id'=>5,'name'=>'Laptop','parent_id'=>1,'level'=>0);
$danhmuc[]=array('id'=>6,'name'=>'Điện thoại','parent_id'=>1,'level'=>0);
$danhmuc[]=array('id'=>7,'name'=>'Máy tính bảng','parent_id'=>1,'level'=>0);
$danhmuc[]=array('id'=>8,'name'=>'Tủ lạnh','parent_id'=>2,'level'=>0);
$danhmuc[]=array('id'=>9,'name'=>'Điều hòa','parent_id'=>2,'level'=>0);
$danhmuc[]=array('id'=>10,'name'=>'Ti vi','parent_id'=>3,'level'=>0);
$danhmuc[]=array('id'=>11,'name'=>'Quạt phun sương','parent_id'=>3,'level'=>0);
$danhmuc[]=array('id'=>12,'name'=>'Tả bỉm','parent_id'=>4,'level'=>0);
$danhmuc[]=array('id'=>13,'name'=>'Sữa','parent_id'=>4,'level'=>0);
$danhmuc[]=array('id'=>14,'name'=>'Máy say sinh tố','parent_id'=>3,'level'=>0);
$danhmuc[]=array('id'=>15,'name'=>'Cây nước','parent_id'=>3,'level'=>0);


$danhmuc[]=array('id'=>16,'name'=>'Laptop dell','parent_id'=>5,'level'=>0);
$danhmuc[]=array('id'=>17,'name'=>'Laptop Sony','parent_id'=>5,'level'=>0);
$danhmuc[]=array('id'=>18,'name'=>'Iphone','parent_id'=>6,'level'=>0);
$danhmuc[]=array('id'=>19,'name'=>'Xiaomi','parent_id'=>6,'level'=>0);

foreach ($danhmuc as $item)
{
    echo '<br> id:'.$item['id'].'-'.$item['name'];
}

$result = array();
function outputLevelCategories($input_categories,&$output_categories,$parent_id=0,$lvl=1)
{
    if (count($input_categories )> 0)
    {
        foreach ($input_categories as $key=>$category)
        {
            if($category['parent_id']==$parent_id)
            {
                $category['level']=$lvl;
                $output_categories[]=$category;
                unset($input_categories[$key]);
                $new_parent_id=$category['id'];
                $new_level=$lvl+1;
                outputLevelCategories($input_categories,$output_categories,$new_parent_id,$new_level);

            }
        }
    }



}
$html_menu="";
function builMenuHTML($input_categories,&$html,$parent_id=0,$lvl=1)
{
    if (count($input_categories )> 0)
    {
        $html.="<ul class='menu-level=$lvl'>";
        foreach ($input_categories as $key=>$category)
        {
            if($category['parent_id']==$parent_id)
            {
                $category['level']=$lvl;
                $html.='<li>';
               $html.=$category['name'];
                unset($input_categories[$key]);

                $new_parent_id=$category['id'];
                $new_level=$lvl+1;
                builMenuHTML($input_categories,$html,$new_parent_id,$new_level);

            }
        }
        $html.='</ul>';
    }
}
builMenuHTML($danhmuc,$html_menu);
echo $html_menu;
?>

</body>
</html>