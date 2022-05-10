<?php 

namespace App\Event;

use App\Entity\User;
use App\Entity\Email;
use Symfony\Contracts\EventDispatcher\Event;

/**
 * The user activated event is dispatched each time user activated
 * in the system.
 */
class EmailEvent extends Event
{
    // Listen when banker account was activated/desactivated 
    public const USER_ACTIVATED = 'user.activated';
    public const RESET_PASSWORD = 'user.reset_password';
    public const USER = 'user.registration';
    public const USERADMIN = 'admin.registration';
    public const FOLDERFAVORITE = 'folder.favorite';
    public const CREATEPROPOSALS = 'create.proposals';
    public const UPDATEPROPOSALS = 'update.proposals';
    public const USERUPDATE = 'update.user';
    public const USERDELETE = 'delete.user';

    protected $user;

    protected $param;

    public function __construct(User $user, Email $email, $param)
    {
        $this->user = $user;
        $this->email = $email;
        $this->param = $param;
    }

    public function getUser(): User
    {
        return $this->user;
    }

    public function getEmail(): Email
    {
        return $this->email;
    }
    public function getParam( $param = null)
    {
        return $this->param;
    }
}