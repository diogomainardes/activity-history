<?php 

namespace ActivityHistory;

use ActivityHistory\Entities\ContentLog;
use ActivityHistory\Entities\CouponLog;

class Logger {
    function content() : ContentLog {
        return new ContentLog();
    }

    function coupon() : ContentLog {
        return new CouponLog();
    }
}
