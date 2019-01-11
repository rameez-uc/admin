<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "tbl_pages".
 *
 * @property int $_tbl_page_id
 * @property string $page_name
 * @property string $page_slug
 * @property string $meta_title
 * @property string $meta_description
 * @property string $layout
 * @property string $body_class
 * @property string $status
 */
class Pages extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_pages';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['page_name', 'page_slug'], 'required'],
            [['meta_description'], 'string'],
            [['page_name'], 'string', 'max' => 50],
            [['page_slug', 'meta_title', 'status'], 'string', 'max' => 255],
            [['layout', 'body_class'], 'string', 'max' => 225],
            [['page_name'], 'unique'],
            [['page_slug'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            '_tbl_page_id' => 'Tbl Page ID',
            'page_name' => 'Page Name',
            'page_slug' => 'Page Slug',
            'meta_title' => 'Meta Title',
            'meta_description' => 'Meta Description',
            'layout' => 'Layout',
            'body_class' => 'Body Class',
            'status' => 'Status',
        ];
    }
}
