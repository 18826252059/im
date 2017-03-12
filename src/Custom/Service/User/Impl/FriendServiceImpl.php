<?php
namespace Custom\Service\User\Dao\Impl;

use Custom\Service\User\FriendService;
use Topxia\Service\Common\BaseService;


/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/12
 * Time: 10:41
 */
class FriendServiceImpl extends BaseService implements FriendService
{

    public function getFriendsId($userId)
    {
        $friendsIds = array();
        $friends = $this->getFriendDao()->getFriendsId($userId);
        foreach ($friends as $friend) {
            if (isset($friend['fromId']) && $friend['fromId'] != $userId) {
                $friendsIds[] = $friend['fromId'];
            }
            if (isset($friend['toId']) && $friend['toId'] != $userId) {
                $friendsIds[] = $friend['toId'];
            }
        }

        return $friendsIds;
    }

    public function getFriendDao()
    {
        return $this->createDao('Custom:User.FriendDao');
    }
}