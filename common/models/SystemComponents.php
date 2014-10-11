<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "post".
 *
 * @property string $id
 * @property integer $user_id
 * @property string $title
 * @property string $content
 * @property string $img
 * @property string $created_at
 * @property string $updated_at
 */
class SystemComponents extends \yii\db\ActiveRecord
{

    /**
     * 返回操作信息 比如成功 或者是 失败
     */
    public static function backUserOperateMessage($item){

        switch($item){
            case 'add_user_success':
                $item = "添加用户成功";
                break;
            case 'update_user_success':
                $item = '更新用户成功';
                break;
            case 'delete_user_success':
                $item = '删除用户成功';
                break;
        }

        return $item;
    }
}
