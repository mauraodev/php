<?php

    $string = "empresa|1|cadastro|cadastro_trio";
    
    $er = '/\\|[0-9]/';
    
    echo preg_replace($er,'',$string);

?>