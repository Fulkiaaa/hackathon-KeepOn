<?php
    require_once(ROOT_PATH.'/app/controllers/Controller.php');
    require_once(ROOT_PATH.'/app/models/BaseModel.php');
    foreach (array_slice(scandir(ROOT_PATH.'/app/utils'), 2) as $name) {require_once(ROOT_PATH."/app/utils/$name");}
?>