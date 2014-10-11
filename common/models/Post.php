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
class Post extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'post';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'content'], 'required'],
            [['user_id', 'order'], 'integer'],
            [['content'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['title'], 'string', 'max' => 150],
            [['img'], 'string', 'max' => 80]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => '用户编号',
            'title' => '标题',
            'content' => '内容',
            'img' => '图片',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
            'order' => '排序',
        ];
    }

    public function beforeSave($insert)
    {
        $this->order = empty($this->order) ? 0 : $this->order;


        if (parent::beforeSave($insert)) {
            if($insert)
                $this->created_at = $this->updated_at = time();
            else
                $this->updated_at = time();
            return true;
        } else {
            return false;
        }
    }
}
