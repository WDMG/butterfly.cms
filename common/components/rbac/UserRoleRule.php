<?php
namespace common\components\rbac;
use Yii;
use yii\rbac\Rule;
use yii\helpers\ArrayHelper;
use common\models\User;

class UserRoleRule extends Rule
{
    public $name = 'userRole';
    public function execute($user, $item, $params)
    {
        //�������� ������ ������������ �� ����
        $user = ArrayHelper::getValue($params, 'user', User::findOne($user));
        if ($user) {
            // 'user','moderator','administrator'
            $role = $user->role; //�������� �� ���� role ���� ������
            if ($item->name === 'administrator') {
                return $role == User::ROLE_ADMINISTRATOR;
            } elseif ($item->name === 'moderator') {
                //moder �������� �������� admin, ������� �������� ��� �����
                return $role == User::ROLE_ADMINISTRATOR || $role == User::ROLE_MODERATOR;
            } 
            elseif ($item->name === 'user') {
                return $role == User::ROLE_ADMINISTRATOR || $role == User::ROLE_MODERATOR || $role == User::ROLE_USER;
            }
        }
        return false;
    }
}