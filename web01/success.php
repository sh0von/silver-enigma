<?php
$flag = "CSEC{l0g1n_1s_n0t_4_g00d_1d34}";

// Check if the request comes from index.php
if (isset($_SERVER['HTTP_REFERER']) && strpos($_SERVER['HTTP_REFERER'], 'index.php') !== false) {
    echo '<div class="alert alert-success">Login successful! Here\'s the flag: ' . $flag . '</div>';
} else {
    echo 'HEHE NOTHING HERE';
}
?>
