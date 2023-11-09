<?php
function tinhLapPhuong($soNguyen){
    $lapPhuong = $soNguyen * $soNguyen * $soNguyen;
    echo "Lập phương của $soNguyen là: $lapPhuong";
}

// Sử dụng hàm tinhLapPhuong để tính lập phương của một số nguyên
$soNguyen = 5;
tinhLapPhuong($soNguyen);
?>