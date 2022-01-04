<?php
    if (isset($_GET['hal'])) {

        if ($_GET['hal']=='pelanggan') {
          include "js/js_tabel.php";
        }
        elseif ($_GET['hal']=='tambah_pelanggan') {
          include "js/js2.php";
        }
        elseif ($_GET['hal']=='edit_pelanggan') {
          include "js/js2.php";
        }
       else
        {
          include "js/js1.php";
        }

    }else{
    include "js/js1.php";
    }
?>




