<?php
include 'lib/library.php';

cekLogin();

$sql = 'SELECT * FROM siswa';

//search
$search = @$_GET['search'];
if(!empty($search)) $sql .= " WHERE nis LIKE '%$search%' OR nama_lengkap LIKE '%$search%'"; 

//ordering
$order_field = $_GET['sort']; //Mengambil Field yang akan di Order
$order_mode = $_GET['order']; //Mengambil mode nya, Ascending atau Descending
if(!empty($order_field) && !empty($order_mode)) $sql .= " ORDER BY $order_field $order_mode";

//reset
if (isset($_GET['reset']) && $_GET['reset'] == 'true') header('location: index.php');

$listSiswa = $mysqli -> query($sql);

include 'views/v_index.php';
?>