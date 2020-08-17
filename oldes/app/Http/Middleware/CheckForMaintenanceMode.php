<?php

namespace Baslat\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode as BaseCheckForMaintenanceMode;

class CheckForMaintenanceMode extends BaseCheckForMaintenanceMode
{
    protected $except = [
        '*/admin*',
    ];
}
