<?php
        echo '姓名:'. $mes->name ."<br>";
        echo '电话:'. $mes->tel  ."<br>";
        echo 'Email:'.$mes->email."<br>";
        echo '内容:'.$mes->content."<br>";
        if($mes->image)
        {
            echo "<img src='".env('QINIU_CUSTOM_URL').'/'.$mes->image. "'  />";
        }
