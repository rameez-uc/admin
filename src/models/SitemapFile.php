<?php

namespace yii\admin\models;

use Yii;

/**
 * This is the model class for table "tbl_sitemap_file".
 *
 * @property int $id
 * @property string $sitemap_url_path
 * @property string $sitemap_data
 * @property string $created_date
 * @property string $last_modified_date
 * @property int $url_counter
 * @property int $is_sitemap_index
 * @property int $parent_id
 * @property int $submit_to_se
 * @property int $is_locked
 * @property int $regenerate
 * @property string $lock_datetime
 *
 * @property TblPageUrl[] $tblPageUrls
 */
class SitemapFile extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_sitemap_file';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sitemap_url_path', 'created_date', 'last_modified_date'], 'required'],
            [['sitemap_data'], 'string'],
            [['created_date', 'last_modified_date', 'lock_datetime'], 'safe'],
            [['url_counter', 'is_sitemap_index', 'parent_id', 'submit_to_se', 'is_locked', 'regenerate'], 'integer'],
            [['sitemap_url_path'], 'string', 'max' => 500],
            [['sitemap_url_path'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'sitemap_url_path' => 'Sitemap Url Path',
            'sitemap_data' => 'Sitemap Data',
            'created_date' => 'Created Date',
            'last_modified_date' => 'Last Modified Date',
            'url_counter' => 'Url Counter',
            'is_sitemap_index' => 'Is Sitemap Index',
            'parent_id' => 'Parent ID',
            'submit_to_se' => 'Submit To Se',
            'is_locked' => 'Is Locked',
            'regenerate' => 'Regenerate',
            'lock_datetime' => 'Lock Datetime',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblPageUrls()
    {
        return $this->hasMany(TblPageUrl::className(), ['tbl_sitemap_file_id' => 'id']);
    }
}
