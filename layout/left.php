<?php
    if($this->countModules('left')){
        $modules["mod1"] = '<jdoc:include type="modules" name="left" style="s3_sidebar" />';
    }
if(isset($modules)){
    $result = count($modules);
    foreach($modules as $module => $name){
        if($result == 1){
            echo '<div class="dc-sidebar">';
            echo $name;
            echo '</div>';
        }
    }
}
?>