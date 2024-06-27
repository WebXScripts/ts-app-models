<?php

declare(strict_types=1);

use Illuminate\Database\Eloquent\Model;

class MethodConfig extends Model
{
    protected $fillable = [
        'event',
        'method',
        'enabled',
        'interval',
        'base_config',
        'config',
    ];
}
