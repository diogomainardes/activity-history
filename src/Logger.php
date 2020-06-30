<?php 

namespace AcitivityHistory;

use AcitivityHistory\Entities\ContentLog;
use AcitivityHistory\Entities\CouponLog;

class Logger {
    function content() : ContentLog {
        return new ContentLog();
    }

    function coupon() : ContentLog {
        return new CouponLog();
    }
}
