<?php

namespace Bugcache\RateLimit;

use Aerys\Request;
use Bugcache\RequestKeys;

class UserCaptchaLimit extends CaptchaLimit {
    protected function getRateLimitId(Request $request) {
        return "user:" . $request->getLocalVar(RequestKeys::USER)["id"];
    }
}