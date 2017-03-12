<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/12
 * Time: 11:40
 */

namespace Custom\WebBundle\Controller;


use Topxia\WebBundle\Controller\BaseController;

class FriendController extends BaseController
{
    public function listAction($id)
    {
        //tofix: this have a bug,only get user add friend,can't get other user add this user;
        $friends = $this->getUserService()->findFriends($id,0,100);

        $response = array('code' => 1, 'data' => json_encode($friends));
        return $this->createJsonResponse($response);
    }

}