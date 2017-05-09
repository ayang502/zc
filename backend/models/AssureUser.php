<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "assure_user".
 *
 * @property integer $id
 * @property integer $loan_id
 * @property string $name
 * @property string $gender
 * @property integer $code_type
 * @property string $code
 * @property string $contact
 * @property integer $created_at
 * @property integer $updated_at
 */
class AssureUser extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'assure_user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['loan_id', 'name', 'code_type', 'code', 'created_at', 'updated_at'], 'required'],
            [['loan_id', 'code_type', 'created_at', 'updated_at'], 'integer'],
            [['name'], 'string', 'max' => 32],
            [['gender'], 'string', 'max' => 2],
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
            'name' => '担保人姓名',
            'gender' => '担保人性别',
            'code_type' => '证件类型,身份证号/房产证号/营业执照号',
            'code' => '证件号码',
            'contact' => '联系方式',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
