<?php
namespace backend\components;

use yii\rbac\Rule;

class LoanRule extends Rule
{
    /**
     * @inheritdoc
     */
    public $name = 'loan_rule';

    /**
     * @param string|int $user the user ID.
     * @param Item $item the role or permission that this rule is associated with
     * @param array $params parameters passed to ManagerInterface::checkAccess().
     * @return bool a value indicating whether the rule permits the role or permission it is associated with.
     */ 
    public function execute($user, $item, $params)
    {
        return isset($params['post']) ? $params['post']->createdBy == $user : false;

    }
}
