<?php

namespace ActivityHistory\Entities;

use ActivityHistory\Interfaces\ILog;

class ContentLog implements ILog {

    function novo( string $newData) {
        echo $newData;
    }

    function send() {
        echo "enviando";
    }

}