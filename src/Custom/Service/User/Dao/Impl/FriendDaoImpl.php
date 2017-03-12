<?php

namespace Custom\Service\User\Dao\Impl;

use Custom\Service\User\Dao\FriendDao;
use Topxia\Service\Common\BaseDao;

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/11
 * Time: 23:35
 */
class FriendDaoImpl extends BaseDao implements FriendDao
{

    protected $table = 'friend';

    public function getFriendsId($userId)
    {
        $sql = "SELECT * FROM {$this->table} WHERE fromId = ? OR toId = ?";

        return $this->getConnection()->fetchAssoc($sql, array($userId,$userId)) ?: null;

    }
}