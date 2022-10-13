<?php
function loadClass($class){
    $lastPosition = strrpos($class, "\\");
    $file = str_replace("\\", DIRECTORY_SEPARATOR, substr($class, 0, $lastPosition + 1)) .
    str_replace("_", DIRECTORY_SEPARATOR, substr($class, $lastPosition + 1)) . '.php';
    $fileName = str_replace('GeekBrains\LevelTwo\\','src\\',$file);
    include $fileName;
}