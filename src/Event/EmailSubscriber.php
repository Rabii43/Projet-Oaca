<?php

namespace App\Event;

use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class EmailSubscriber implements EventSubscriberInterface
{
    /**
     * @var MailerInterface
     */
    private $mailer;

    /**
     * @param MailerInterface $mailer
     */
    public function __construct(MailerInterface $mailer)
    {
        $this->mailer = $mailer;
    }

    public static function getSubscribedEvents()
    {
        return [
            EmailEvent::USER => 'onCreateUser',
        ];
    }

    public function onCreateUser(EmailEvent $event)
    {
        $user = $event->getUser();
        $password = $event->getParam();
        $email = (new TemplatedEmail())
            ->from('no-reply@fidoc.com')
            ->to($user->getEmail())
            ->subject($user->getUsername().' - '.'Création d’un compte utilisateur sur FIDOC')
            ->htmlTemplate('email/inscription.html.twig')
            ->context([
                'firstname' => $user->getFirstname(),
                'lastname' => $user->getLastname(),
                'userEmail'=>$user->getEmail(),
                'password'=>$password,
            ]);
        $this->mailer->send($email);
    }



    public function onRelaunchFolder(EmailEvent $event) {
        $folder = $event->getParam();
        $email = (new Email())
            ->from('no-reply@fidoc.com');
        if($folder->getStatus() == 1 || $folder->getStatus() == 2 ) {
            $email->to($folder->getDemandeur()->getEmail())
                ->subject('Délai de relance!')
                ->html('Bonjour M(me)' . $folder->getDemandeur() ->getFirstname() . ',<br><br> Nous tenons à vous informer que le dossier ' . $folder->getName() . '  est en attente de finalisation de votre part .<br><br> Veuillez vous rendre sur votre espace afin de traiter cette demande.<br><br>Nous vous remercions.<br><br> Cordialement.<br><br> L\’équipe Fidoc <br><br> 
                        Ce courriel a été envoyé automatiquement. Nous vous remercions de ne pas y répondre.');
        } else if($folder->getStatus() == 3) {
            $email->to($folder->getControleur()->getEmail())
                ->subject('Délai de relance!')
                ->html('Bonjour M(me)' . $folder->getControleur()->getFirstname() . ',<br><br> Le délai de relance du dossier ' . $folder->getName() . '  est dépassé .<br><br> Cordialement.');
        }
        $this->mailer->send($email);
    }
}