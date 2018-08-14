<?php

namespace XuTL\Tim;

/**
 * Trait TIMable
 *
 * @author Tongle Xu <xutongle@gmail.com>
 */
trait TIMable
{
    /**
     * Boot the trait.
     * @return void
     */
    public static function bootTIMable()
    {
        static::observe(new UserObserver());
    }
}