<?php
/**
 * @link http://www.tintsoft.com/
 * @copyright Copyright (c) 2012 TintSoft Technology Co. Ltd.
 * @license http://www.tintsoft.com/license/
 */

namespace XuTL\Tim;


/**
 * Trait HasTIMGroup
 *
 * @author Tongle Xu <xutongle@gmail.com>
 */
trait HasTIMGroup
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