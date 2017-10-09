<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "testimonials".
 *
 * @property string $id
 * @property string $content
 * @property string $author
 * @property string $created_by
 * @property string $updated_by
 * @property string $created_at
 * @property string $updated_at
 * @property integer $is_deleted
 */
class Testimonials extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'testimonials';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['content', 'author', 'is_deleted'], 'required'],
            [['content'], 'string'],
            [['created_by', 'updated_by', 'is_deleted'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['author'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'content' => 'Content',
            'author' => 'Author',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'is_deleted' => 'Is Deleted',
        ];
    }
}
