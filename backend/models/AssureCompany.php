<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "assure_company".
 *
 * @property integer $id
 * @property integer $loan_id
 * @property string $name
 * @property string $code
 * @property string $contact
 * @property integer $created_at
 * @property integer $updated_at
 */
class AssureCompany extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'assure_company';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['loan_id', 'name', 'code', 'created_at', 'updated_at'], 'required'],
            [['loan_id', 'created_at', 'updated_at'], 'integer'],
            [['name'], 'string', 'max' => 32],
            [['code'], 'string', 'max' => 255],
            [['contact'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'loan_id' => '借款id',
            'name' => '担保公司名称',
            'code' => '营业证件号码',
            'contact' => '联系方式',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
