<?php

namespace Custom\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Topxia\WebBundle\Controller\DefaultController as BaseDefaultController;

class DefaultController extends BaseDefaultController
{
    public function helloAction($name)
    {
        return $this->render('CustomAdminBundle:Default:index.html.twig', array('name' => $name));
    }

    public function indexAction(Request $request)
    {
        $user   = $this->getCurrentUser();
        //go to login page if user isn't login
        if (empty($user)) {
            return $this->redirect($this->generateUrl('login'));
        }

        $friends = $this->getUserService()->findFriends($user['id'],0,100);
        $menu = array();
        $course = array();
        return $this->render('TopxiaWebBundle:CourseManage:index.html.twig', array(
            'menu'   => $menu,
            'course' => $course,
            'friends' => $friends
        ));
    }
}
