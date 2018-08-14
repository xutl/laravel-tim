<?php
/**
 * @link http://www.tintsoft.com/
 * @copyright Copyright (c) 2012 TintSoft Technology Co. Ltd.
 * @license http://www.tintsoft.com/license/
 */

namespace XuTL\Tim;


/**
 * Trait TIMGroupable
 *
 * @author Tongle Xu <xutongle@gmail.com>
 */
trait TIMGroupable
{
    /**
     * Boot the trait.
     * @return void
     */
    public static function bootTIMable()
    {
        static::observe(new GroupObserver());
    }
}