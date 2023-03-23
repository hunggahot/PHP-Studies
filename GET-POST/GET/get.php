<?php
echo 'Dữ liệu Chúng tôi nhân được là </br>';

foreach ($_GET as $key => $val){
    echo '<strong>' . $key . ' => ' . $val . '</strong></br>';
}

?>