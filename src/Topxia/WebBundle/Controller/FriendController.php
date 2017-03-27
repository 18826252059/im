<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/26
 * Time: 12:57
 */

namespace Topxia\WebBundle\Controller;


use Symfony\Component\HttpFoundation\Request;
use Topxia\Common\Paginator;

class FriendController extends BaseController
{

    //search/
    public function pickAction(Request $request)
    {

//        $account = 'test';
        $account = $request->query->get('que');
        $condition = array('keywordType' => 'nickname','keyword' => $account);

        $userCount = $this->getUserService()->searchUserCount($condition);
        $page = empty($this->get('request')) ? 0 : $this->get('request');
        $paginator = new Paginator(
            $page,
            $userCount,
            20
        );

        $users = $this->getUserService()->searchUsers(
            $condition,
            array('createdTime', 'DESC'),
            0,
            10
        );

//        $data = array();
//        $data['users'] = $users;
//        $data['userCount'] = $userCount;
//        return $this->createJsonResponse($data);
        return $this->render('TopxiaWebBundle:Friend:add-friend-modal.html.twig', array(
            'que'          => $account,
            'users'          => $users,
//            'allRoles'       => $allRoles,
            'userCount'      => $userCount,
            'paginator'      => $paginator
//            'profiles'       => $profiles,
//            'showUserExport' => $showUserExport
        ));

    }

}