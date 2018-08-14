<?php
/**
 * @link http://www.tintsoft.com/
 * @copyright Copyright (c) 2012 TintSoft Technology Co. Ltd.
 * @license http://www.tintsoft.com/license/
 */

namespace XuTL\Tim;

use Illuminate\Database\Eloquent\Model;

/**
 * 群组监听
 *
 * @author Tongle Xu <xutongle@gmail.com>
 */
class GroupObserver
{
    /**
     * 监听创建事件.
     *
     * @param  Model $model
     * @return void
     */
    public function created($model)
    {

    }

    /**
     * 监听删除事件.
     *
     * @param  Model $model
     * @return void
     */
    public function deleting($model)
    {

    }

    /**
     * Get the TIM for the model.
     *
     * @return \XuTL\QCloud\Tim\Tim
     */
    public function TIMUsing()
    {
        return app(\XuTL\QCloud\Tim\Tim::class);
    }
}