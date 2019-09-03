<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%csv_file}}".
 *
 * @property int $csv_file_id
 * @property string $csv_file_name
 */
class CsvFile extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%csv_file}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['csv_file_name'], 'required'],
            [['csv_file_name'], 'string', 'max' => 500],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'csv_file_id' => Yii::t('app', 'Csv File ID'),
            'csv_file_name' => Yii::t('app', 'Csv File Name'),
        ];
    }
}
