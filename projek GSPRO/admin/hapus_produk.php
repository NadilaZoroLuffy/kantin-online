<?php

require 'functions.php';

$id = $_GET["id"];

if(hapusProduk($id) > 0){
    echo "
    <script type='text/javascript'>
        alert('Data produk Berhasil Dihapus')
        window.location = 'produk.php';
    </script>
    ";
}else{
    echo "
    <script type='text/javascript'>
        alert('Data produk Gagal Dihapus')
        window.location = 'produk.php';
</script>
    ";
}
?>