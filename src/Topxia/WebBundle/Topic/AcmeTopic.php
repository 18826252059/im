<?php

namespace Topxia\WebBundle\Topic;

use Gos\Bundle\WebSocketBundle\Router\WampRequest;
use Gos\Bundle\WebSocketBundle\Topic\ConnectionPeriodicTimer;
use Gos\Bundle\WebSocketBundle\Topic\TopicInterface;
use Gos\Bundle\WebSocketBundle\Topic\TopicPeriodicTimer;
use Gos\Bundle\WebSocketBundle\Topic\TopicPeriodicTimerInterface;
use Ratchet\ConnectionInterface;
use Ratchet\Wamp\Topic;
use Topxia\WebBundle\Controller\BaseController;

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/24
 * Time: 13:48
 */
class AcmeTopic extends BaseController implements TopicInterface
{

    protected $notification;

//    /**
//     * @var TopicPeriodicTimer
//     */
//    protected $periodicTimer;

    /**
     * This will receive any Subscription requests for this topic.
     *
     * @param ConnectionInterface $connection
     * @param Topic $topic
     * @param WampRequest $request
     * @return void
     */
    public function onSubscribe(ConnectionInterface $connection, Topic $topic, WampRequest $request)
    {
        //this will broadcast the message to ALL subscribers of this topic.
        $userId = $request->getAttributes()->get('userId');
        $sessionId = $connection->WAMP->sessionId;
        if ($userId) {
            $this->getUserService()->updateUser($userId,array('sessionId' => $sessionId));
        }
        $topic->broadcast(['msg' => $connection->resourceId . " has joined " . $topic->getId()."===".count($topic)]);

//      /*  $condition = array();
//        $condition['published'] = 0;
//        $notify = $this->getBatchNotificationService()->searchBatchNotifications($condition,array('createdTime','DESC'),0,10);
//        $this->notification = $notify;
//        /** @var ConnectionPeriodicTimer $topicTimer */
//        $topicTimer = $connection->PeriodicTimer;
//
//        //Add periodic timer
//        $topicTimer->addPeriodicTimer('hello', 2, function() use ($topic, $connection) {
//
//            $temp = $this->notification;
//            if (!empty($temp)) {
//                $connection->event($topic->getId(), ['msg' => $temp['fromId']]);
//            } else {
//                $connection->event($topic->getId(), ['msg' => 'ooooops']);
//            }
//        });*/
    }

    /**
     * This will receive any UnSubscription requests for this topic.
     *
     * @param ConnectionInterface $connection
     * @param Topic $topic
     * @param WampRequest $request
     * @return voids
     */
    public function onUnSubscribe(ConnectionInterface $connection, Topic $topic, WampRequest $request)
    {
        //this will broadcast the message to ALL subscribers of this topic.
        $topic->broadcast(['msg' => $connection->resourceId . " has left " . $topic->getId()]);
    }

    /**
     * This will receive any Publish requests for this topic.
     *
     * @param ConnectionInterface $connection
     * @param $Topic topic
     * @param WampRequest $request
     * @param $event
     * @param array $exclude
     * @param array $eligibles
     * @return mixed|void
     */
    public function onPublish(ConnectionInterface $connection, Topic $topic, WampRequest $request, $event, array $exclude, array $eligible)
    {
        /*
            $topic->getId() will contain the FULL requested uri, so you can proceed based on that

            if ($topic->getId() == "acme/channel/shout")
               //shout something to all subs.
        */

        print_r($event);
//        $event = json_decode($event);
        $fromId = isset($event['fromId']) ? $event['fromId'] : 0;
        $message = isset($event['msg']) ? $event['msg'] : null;
        $toId = $request->getAttributes()->get('userId');

        print($fromId.'===='.$toId.'====='.$message);
        $this->getMessageService()->sendMessage($fromId, $toId, $message, $status = 1);

        $topic->broadcast([
            'fromId' => $fromId,
            'msg' => $message
        ]);
    }

    /**
     * Like RPC is will use to prefix the channel
     * @return string
     */
    public function getName()
    {
        return 'acme.topic';
    }

    protected function getMessageService()
    {
        return $this->getServiceKernel()->createService('User.MessageService');
    }

//    /**
//     * @param Topic $topic
//     *
//     * @return mixed
//     */
//    public function registerPeriodicTimer(Topic $topic)
//    {
//        $userId = $request->getAttributes()->get('userId');
//        print
//        $notify = $this->getBatchNotificationService()->
//        //add
//        $this->periodicTimer->addPeriodicTimer($this, 'hello', 2, function() use ($topic) {
//            $topic->broadcast(['msg' => 'hello world']);
//        });
///*
//        //exist
//        $this->periodicTimer->isPeriodicTimerActive($this, 'hello'); // true or false
//
//        //remove
//        $this->periodicTimer->cancelPeriodicTimer($this, 'hello');*/
//    }
//
//    /**
//     * @param TopicPeriodicTimer $periodicTimer
//     */
//    public function setPeriodicTimer(TopicPeriodicTimer $periodicTimer)
//    {
//        $this->periodicTimer = $periodicTimer;
//    }

    protected function getBatchNotificationService()
    {
        return $this->getServiceKernel()->createService('User.BatchNotificationService');
    }
}