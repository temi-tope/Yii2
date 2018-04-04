<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "posts".
 *
 * @property int $posts_id
 * @property string $posts_title
 * @property string $post_description
 * @property int $author_id
 *
 * @property Users $author
 */
class Posts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'posts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['posts_id', 'author_id'], 'required'],
            [['posts_id', 'author_id'], 'integer'],
            [['posts_title', 'post_description'], 'string', 'max' => 45],
            [['posts_id', 'author_id'], 'unique', 'targetAttribute' => ['posts_id', 'author_id']],
            [['author_id'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['author_id' => 'user_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'posts_id' => 'Posts ID',
            'posts_title' => 'Posts Title',
            'post_description' => 'Post Description',
            'author_id' => 'Author ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthor()
    {
        return $this->hasOne(Users::className(), ['user_id' => 'author_id']);
    }
}
