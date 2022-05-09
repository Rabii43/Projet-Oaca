<?php

namespace App\Event;

use App\Entity\User;
use Symfony\Contracts\EventDispatcher\Event;

class EmailEvent extends Event
{
    const USER = "user.create";
    const EDITSTATUS = "folder.edit.status";
    const RELAUNCHTIME = "relaunch.time.edit";
    const RELAUNCHTIMEOUTDATED = "relaunch.time.outdated";
    const USERFROMSOURCE = "user.create.fromSource";
    const RELAUNCHFOLDER = "relaunch.folder";
    /**
     * @var $user
     */
    private $user;

    /**
     * @var $param
     */
    private $param;

    public function __construct($user,$param)
    {
        $this->user = $user;
        $this->param = $param;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function getParam()
    {
        return $this->param;
    }

}