<?php

namespace ActivityHistory\Entities;

use ActivityHistory\Interfaces\ILog;

class CouponLog implements ILog {
    function activated(int $id) {
        echo $id;
    }

    function deactivated(int $id, int $user) {
        echo $id;
    }

    function send() {
        echo "enviando";
    }
}
