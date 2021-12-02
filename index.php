<?php

$page = $_GET ['page']??'';

if ($page === ''|| $page === 'home'){
    include 'view/view.home.php';
}

elseif($page === 'new'){
    include 'view/view.new.php';
}

elseif($page === 'others'){
    include 'view/view.others.php';
}

else{
    include 'error/error.html';
    
}




