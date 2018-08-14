<?php
/**
 * @link http://www.tintsoft.com/
 * @copyright Copyright (c) 2012 TintSoft Technology Co. Ltd.
 * @license http://www.tintsoft.com/license/
 */

namespace XuTL\Tim;


use XuTL\QCloud\Tim\Constants;

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

    public function getGroupName()
    {
        return '';
    }

    /**
     * 获取加群处理方式
     *
     * @return mixed
     */
    public function getGroupApplyJoinOption()
    {
        return Constants::GROUP_APPLY_JOIN_OPTION_FREE_ACCESS;
    }

    /**
     * 获取群类型
     *
     * @return mixed
     */
    public function getGroupType()
    {
        return Constants::GROUP_TYPE_PUBLIC;
    }
}