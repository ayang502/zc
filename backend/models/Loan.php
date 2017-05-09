<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "loan".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $dollar
 * @property string $name
 * @property string $gender
 * @property integer $code_type
 * @property string $code
 * @property string $starttime
 * @property string $endtime
 * @property string $paytime
 * @property integer $assure_type
 * @property string $contact
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 */
class Loan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'loan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'name', 'code_type', 'code', 'assure_type', 'created_at', 'updated_at'], 'required'],
            [['user_id', 'dollar', 'code_type', 'assure_type', 'status', 'created_at', 'updated_at'], 'integer'],
            [['starttime', 'endtime', 'paytime'], 'safe'],
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
            'user_id' => '借款公司id',
            'dollar' => '贷款金额',
            'name' => '借款人姓名',
            'gender' => '借款人性别',
            'code_type' => '证件类型',
            'code' => '证件号码',
            'starttime' => '借款日期',
            'endtime' => '到期日期',
            'paytime' => '结束借款日期',
            'assure_type' => '担保类型',
            'contact' => '联系方式',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
    /**
     *  关联表assure_user
     */
    public function getAssureUser()
    {
        return $this->hasOne(AssureUser::className(), ['loan_id' => 'id']);
    }
    /**
     *  关联表assure_company
     */
    public function getAssureCompany()
    {
        return $this->hasOne(AssureCompany::className(), ['loan_id' => 'id']);
    }
}
