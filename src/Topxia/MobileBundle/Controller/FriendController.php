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

}