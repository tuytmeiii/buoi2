<?php
// gán giá trị 
$chuoichinh = "xin chao cac ban";
$chuoicon = "nhe";
$vitri = strpos($chuoichinh, $chuoicon);
if($vitri === false){
    echo "khong tim thay chuoi con ";
} else {
    echo "chuoi con o vi tri: $vitri";
}
?>
