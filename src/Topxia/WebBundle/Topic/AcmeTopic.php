<?php

namespace Topxia\WebBundle\Topic;

use Gos\Bundle\WebSocketBundle\Router\WampRequest;
use Gos\Bundle\WebSocketBundle\Topic\TopicInterface;
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
}