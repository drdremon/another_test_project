<?php

require __DIR__.'/model/function.php';

$items = Photos_getAll();

include __DIR__.'/view/view.php';

?>