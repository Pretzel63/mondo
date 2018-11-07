<?php

function recursiveArraySearch($needle, $haystack)
{
    foreach ($haystack as $key => $value) {
        if ($key === $needle) {
            return $value;
        } elseif (is_array($value)) {
            $result = $this->recursiveArraySearch($needle, $value);
            if ($result !== false){
                return $result;
            }
        }
    }

    return false;
}

$files = scandir('soft');    
foreach($files as $file) {
 if (!in_array($file,array(".",".."))) 
  { 
    echo $file . "<br />";
    echo filesize('soft/'.$file) . ' bytes';
  }
}
