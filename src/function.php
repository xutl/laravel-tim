<?php

if (!function_exists('tim')) {
    /**
     * @return \Illuminate\Foundation\Application|mixed
     */
    function tim()
    {
        $tim = app(\XuTL\QCloud\Tim\Tim::class);
        return $tim;
    }
}