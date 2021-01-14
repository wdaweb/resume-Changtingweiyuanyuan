<!-- 修改自傳 -->
<?php
include_once "../base.php";

print_r($_POST);
echo '<br><hr>';

// print_r(count($_POST['textC']));


$row=[];
for($i=0;$i<count($_POST['textC']);$i++){
    $row['textC']=$_POST['textC'][$i];
    $row['textE']=$_POST['textE'][$i];
    $row['id']=$_POST['id'][$i];
    $SelfIntro->save($row);
}

foreach($_POST['id'] as  $k => $id){

    if(isset($_POST['del']) && in_array($id,$_POST['del'])){
        $SelfIntro->del($id);
    }
    // sh
}

`

to("../admin.php?do=intro");



?>