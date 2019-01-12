<?php

namespace yii\admin\models;

use Yii;

/**
 * This is the model class for table "tbl_page_url".
 *
 * @property int $id
 * @property int $tbl_sitemap_file_id
 * @property string $url
 * @property string $canonical_url
 * @property string $meta_title
 * @property string $meta_description
 * @property string $meta_keywords
 * @property int $sitemap_include
 * @property string $sitemap_priority
 * @property string $sitemap_changefreq
 * @property string $sitemap_last_updated_date
 * @property int $no_follow
 * @property int $no_index
 * @property string $created_date
 * @property string $last_modified_date
 *
 * @property SitemapFile $SitemapFile
 */
class PageUrl extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_page_url';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tbl_sitemap_file_id', 'sitemap_include', 'no_follow', 'no_index'], 'integer'],
            [['url', 'canonical_url', 'meta_title', 'meta_description', 'meta_keywords', 'sitemap_include', 'sitemap_last_updated_date', 'no_follow', 'no_index', 'created_date', 'last_modified_date'], 'required'],
            [['sitemap_priority'], 'number'],
            [['sitemap_changefreq'], 'string'],
            [['sitemap_last_updated_date', 'created_date', 'last_modified_date'], 'safe'],
            [['url', 'canonical_url', 'meta_description', 'meta_keywords'], 'string', 'max' => 500],
            [['meta_title'], 'string', 'max' => 255],
            [['url'], 'unique'],
            [['tbl_sitemap_file_id'], 'exist', 'skipOnError' => true, 'targetClass' => SitemapFile::className(), 'targetAttribute' => ['tbl_sitemap_file_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tbl_sitemap_file_id' => 'Tbl Sitemap File ID',
            'url' => 'Url',
            'canonical_url' => 'Canonical Url',
            'meta_title' => 'Meta Title',
            'meta_description' => 'Meta Description',
            'meta_keywords' => 'Meta Keywords',
            'sitemap_include' => 'Sitemap Include',
            'sitemap_priority' => 'Sitemap Priority',
            'sitemap_changefreq' => 'Sitemap Changefreq',
            'sitemap_last_updated_date' => 'Sitemap Last Updated Date',
            'no_follow' => 'No Follow',
            'no_index' => 'No Index',
            'created_date' => 'Created Date',
            'last_modified_date' => 'Last Modified Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSitemapFile()
    {
        return $this->hasOne(SitemapFile::className(), ['id' => 'tbl_sitemap_file_id']);
    }
}
