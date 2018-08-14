<?php
/**
 * @link http://www.tintsoft.com/
 * @copyright Copyright (c) 2012 TintSoft Technology Co. Ltd.
 * @license http://www.tintsoft.com/license/
 */

namespace XuTL\Tim;

use Illuminate\Database\Eloquent\Model;
use XuTL\QCloud\Tim\Exception\InvalidArgumentException;
use XuTL\QCloud\Tim\Requests\CreateGroupRequest;

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
        $req = new CreateGroupRequest();
        $req->setOwnerAccount($model->user_id);
        $req->setName($model->getGroupName());
        try {
            $req->setType($model->getGroupType());
            $req->setApplyJoinOption($model->getGroupApplyJoinOption());
        } catch (InvalidArgumentException $e) {
        }
        $res = $model->TIMUsing()->createGroup($req);
        if ($res->isSucceed()) {
            $this->updateAttributes(['chat_id' => $res->GroupId]);
        }
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