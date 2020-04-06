<?php

function site_url($uri = '')
{
    if (!is_array($uri)) {
        //	Tous les paramètres sont insérés dans un tableau
        $uri = func_get_args();
    }

    //	On ne modifie rien ici
    $CI = &get_instance();
    return $CI->config->site_url($uri);
}
