<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%csv}}".
 *
 * @property int $csv_id
 * @property string $csv_first_name
 * @property string $csv_last_name
 * @property string $csv_email
 * @property int $csv_csv_file_id
 */
class Csv extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%csv}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['csv_first_name', 'csv_last_name', 'csv_email', 'csv_csv_file_id'], 'required'],
            [['csv_csv_file_id'], 'integer'],
            [['csv_first_name', 'csv_last_name', 'csv_email'], 'string', 'max' => 500],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'csv_id' => Yii::t('app', 'Csv ID'),
            'csv_first_name' => Yii::t('app', 'Csv First Name'),
            'csv_last_name' => Yii::t('app', 'Csv Last Name'),
            'csv_email' => Yii::t('app', 'Csv Email'),
            'csv_csv_file_id' => Yii::t('app', 'Csv Csv File ID'),
        ];
    }
}
