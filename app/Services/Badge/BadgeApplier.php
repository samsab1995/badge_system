<?php


namespace App\Services\Badge;


use App\Models\UserStat;
use Exception;

class BadgeApplier
{
    /**
     * @throws Exception
     */
    public function apply(UserStat $userStat)
    {
        $xpHandler = resolve(XPHandler::class);
        $topicHandler = resolve(TopicHandler::class);
        $replyHandler = resolve(ReplyHandler::class);
        $xpHandler->setNext($topicHandler)->setNext($replyHandler);
        $xpHandler->handle($userStat);
    }
}
