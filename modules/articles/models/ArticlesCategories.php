<?php

namespace app\modules\articles\models;

use Yii;

/**
 * This is the model class for table "article_categories".
 *
 * @property string $id
 * @property string $name
 * @property string $alias
 * @property string $description
 * @property integer $parent
 * @property integer $published
 * @property integer $access
 * @property integer $ordering
 * @property string $image
 * @property string $params
 * @property string $metadesc
 * @property string $metakey
 * @property string $language
 */
class ArticlesCategories extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%article_categories}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'alias', 'description', 'image', 'params', 'metadesc', 'metakey', 'language'], 'required'],
            [['description', 'params', 'metadesc', 'metakey'], 'string'],
            [['parent', 'published', 'access', 'ordering'], 'integer'],
            [['name', 'alias', 'image'], 'string', 'max' => 255],
            [['language'], 'string', 'max' => 7]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'alias' => Yii::t('app', 'Alias'),
            'description' => Yii::t('app', 'Description'),
            'parent' => Yii::t('app', 'Parent'),
            'published' => Yii::t('app', 'Published'),
            'access' => Yii::t('app', 'Access'),
            'ordering' => Yii::t('app', 'Ordering'),
            'image' => Yii::t('app', 'Image'),
            'params' => Yii::t('app', 'Params'),
            'metadesc' => Yii::t('app', 'Metadesc'),
            'metakey' => Yii::t('app', 'Metakey'),
            'language' => Yii::t('app', 'Language'),
        ];
    }
}
