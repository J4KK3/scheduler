<?php

    function calcDay(){
        date_default_timezone_set('CET');
        return date(DATE_RFC2822);
    }

    echo calcDay();



?>