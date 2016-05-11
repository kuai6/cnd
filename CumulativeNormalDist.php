<?php

namespace Kuai6\Cnd;

include __DIR__ . '/contrib/ignatius_reilly/f_cumulative_normal_dist.php';

/**
 * Class CumulativeNormalDist
 * @package Kuai6\Cnd
 */
class CumulativeNormalDist
{
    public static function normsdist($value)
    {
        return normsdist($value);
    }

    public static function normsinv($value)
    {
        return normsinv($value);
    }
}