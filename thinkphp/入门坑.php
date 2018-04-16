<?php
/*
nginx 如果配置到public下那么需要加入配置:
    location / {
        if (!-e $request_filename) {
            rewrite  ^(.*)$  /index.php?s=/$1  last;
            break;
        }
        #try_files $uri $uri/ /index.php$is_args$args;
        try_files $uri $uri/ =404;
    }
*/



?>
