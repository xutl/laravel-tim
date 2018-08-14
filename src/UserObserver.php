<?php
/**
 * @link http://www.tintsoft.com/
 * @copyright Copyright (c) 2012 TintSoft Technology Co. Ltd.
 * @license http://www.tintsoft.com/license/
 */

namespace XuTL\Tim;


use Illuminate\Database\Eloquent\Model;

/**
 * 跟用户相关的监听
 *
 * @author Tongle Xu <xutongle@gmail.com>
 */
class UserObserver
{
    /**
     * 监听用户创建事件.
     *
     * @param  Model $model
     * @return void
     */
    public function created($model)
    {
       $model->TIMUsing()->accountImport($model->getKey());
    }

    /**
     * 监听用户删除事件.
     *
     * @param  Model $model
     * @return void
     */
    public function deleting($model)
    {
        $model->TIMUsing()->getAccount()->kick();
        $model->TIMUsing()->getAccount()->kick();
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