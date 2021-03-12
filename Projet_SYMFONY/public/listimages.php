<?php
function listimages() {
        
        if ($Directory_Scanned = opendir('./img/utopotes')) {
        while (($File_To_List = readdir($Directory_Scanned)) !== false) {
            if ($File_To_List != "." && $File_To_List != "..") {
               
                echo $results_array[] = '<img src= "' . $File_To_List . '" alt="' . $File_To_List . '">';
            }
        }
    }
}
listimages();
?>