<?php
$option = $_POST['option'];
if ($option=='rent'){
    header("Location: /rent");
} else {
    echo $option;
}