<?php
$option = $_POST['option'];
if ($option == 'rent') {
    header("Location: /rent");
} else if ($option == 'rental-info') {
    header("Location: /rental_info");
} else {
    echo $option;
}