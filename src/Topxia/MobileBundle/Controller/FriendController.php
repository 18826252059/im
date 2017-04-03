<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/21
 * Time: 0:14
 */

namespace Topxia\MobileBundle\Controller;


use Symfony\Component\HttpFoundation\Request;

class FriendController extends MobileController
{

    public function listAction(Request $request,$id)
    {
//        $user = $this->getCurrentUser();
//        if (empty($user)) {
//            return $this->createErrorResponse($request, 'auth_error', '非法用户请求！');
//        }

//        $userId = $request->query->get('userId');

        $friends = array();
        if (!empty($id)) {
            $friends = $this->getUserService()->findAllFriendsByUserId($id);
        }

        $data = array('friend' => $friends ? $friends : null);
        $result = array(
            'code' => 1,
            'data' => $data
        );

        return $this->createJson($request,$result);
    }

    public function listHistoryAction(Request $request,$id)
    {
        $historyUserIds = $this->getMessageService()->getLatestContactUserIds($id);

//        print_r($historyUserIds);
        $users = $this->getUserService()->findUsersByIds($historyUserIds);

        $data = array('historyUsers' => $users);
        $result = array(
            'code' => 1,
            'test' => $historyUserIds,
            'data' => $data
        );
        return $this->createJson($request,$result);

    }

    public function searchUserAction(Request $request)
    {
        $account = $request->query->get('account');

        $condition = array('keywordType' => 'nickname', 'keyword' => $account);

//        $account = $request->query->get('que');
//        $condition = array('keywordType' => 'nickname','keyword' => $account);

        $userCount = array();
        $userCount = $this->getUserService()->searchUserCount($condition);
        $users = array();
        $users = $this->getUserService()->searchUsers(
            $condition,
            array('createdTime', 'DESC'),
            0,
            10
        );
        if (empty($users)) {
            $condition['keywordType'] = 'verifiedMobile';
            $userCount = $this->getUserService()->searchUserCount($condition);
            $users = $this->getUserService()->searchUsers(
                $condition,
                array('createdTime', 'DESC'),
                0,
                10
            );
        }
        if (empty($users)) {
            $condition['keywordType'] = 'email';
            $userCount = $this->getUserService()->searchUserCount($condition);
            $users = $this->getUserService()->searchUsers(
                $condition,
                array('createdTime', 'DESC'),
                0,
                10
            );
        }

        $data = array('test' => $account,'userCount' => $userCount,'searchUsers' => $users);
        $result = array(
            'code' => 1,
            'data' => $data
        );
        return $this->createJson($request,$result);

    }

//    public function followAction()
//    {
//
//    }

    private function getMessageService()
    {
        return $this->getServiceKernel()->createService('User.MessageService');
    }

}