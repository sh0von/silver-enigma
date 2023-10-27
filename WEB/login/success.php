<?php
session_start(); // Start the session

$flag = "CSEC{l0g1n_1s_n0t_4_g00d_1d34";

if (isset($_SESSION['admin']) && $_SESSION['admin'] === true) {
    echo '<div class="alert alert-success">Login successful! Here\'s the flag: ' . $flag . '</div>';
} else {
    echo 'HEHE NOTHING HERE';
}
?>
