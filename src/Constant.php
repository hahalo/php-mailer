<?php

namespace Hahalo\Mailer;

final class Constant
{
    const EOF = "\r\n";
    const DEBUG_ON = 1;

    //'normal', 'urgent', 'non-urgent'
    const PRIORITY_NORMAL = 'normal';
    const PRIORITY_URGENT = 'urgent';
    const PRIORITY_NON_URGENT = 'no-urgent';
}
