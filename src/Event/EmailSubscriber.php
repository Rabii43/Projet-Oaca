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
            EmailEvent::EDITSTATUS => 'onEditStatusFolder',
            EmailEvent::RELAUNCHTIME => 'onEditRelaunchTime',
            EmailEvent::RELAUNCHTIMEOUTDATED => 'onRelaunchTime',
            EmailEvent::USERFROMSOURCE => 'onCreateUserFromSource',
            EmailEvent::RELAUNCHFOLDER => 'onRelaunchFolder',


        ];
    }

    public function onCreateUser(EmailEvent $event)
    {
        $user = $event->getUser();
        $source = $user->getSource();
        $sourceName = $source->getName();
        $sourceLogo = $source->getLogo();
        $password = $event->getParam();
        $email = (new TemplatedEmail())
            ->from('no-reply@fidoc.com')
            ->to($user->getEmail())
            ->subject($sourceName.' - '.'Création d’un compte utilisateur sur FIDOC')
            ->htmlTemplate('email/inscription.html.twig')
            ->context([
                'firstname' => $user->getFirstname(),
                'lastname' => $user->getLastname(),
                'userEmail'=>$user->getEmail(),
                'password'=>$password,
                'sourceName' => $sourceName,
                'sourceLogo' => $sourceLogo
            ]);
        $this->mailer->send($email);
    }

    public function onCreateUserFromSource(EmailEvent $event)
    {
        $user = $event->getUser();
        $password = $event->getParam();
        $email = (new Email())
            ->from('no-reply@fidoc.com')
            ->to($user->getEmail())
            ->subject('Création du compte fidoc!')
            ->html('Bonjour, Nous tenons à vous informer que votre compte a été créé sur la plateforme <a href="http://fidoc.prod-projet.com">Fidoc</a> .<br><br> Vos identifiants de connexion sont : <br><br> utilisateur : '.$user->getEmail().'<br>'.'mot de passe : '.$password.'<br><br>
                         Nous vous informons que vous serez appelés à changer votre mot de passe lors de votre première connexion. <br><br> Cordialement, <br><br> l\'équipe Fidoc,<br><br> Ce courriel a été envoyé automatiquement. Nous vous remercions de ne pas y répondre.
                   ');
        $this->mailer->send($email);
    }

    public function onEditStatusFolder(EmailEvent $event)
    {
        $param = $event->getUser();
        $source = $param->getSource();
        $sourceName = $source->getName();
        $demandeur = $param->getDemandeur()->getFirstname().' '.$param->getDemandeur()->getLastname();
        $courtier = $param->getCourtier()->getFirstname().' '.$param->getCourtier()->getLastname();
        $controleur = $param->getControleur()->getFirstname().' '.$param->getControleur()->getLastname();
        if ($event->getParam() != null) {
            $comment = $event->getParam() ;
        } else {
            $comment = '';
        }
        $email = (new TemplatedEmail())
            ->from('no-reply@fidoc.com');
        switch ($param->getStatus()) {
            case 1:
                $email
                    ->to($param->getDemandeur()->getEmail())
                    ->subject($sourceName.' - Fournir vos documents')
                    ->htmlTemplate('email/assignationDossier.html.twig')
                    ->context([
                        'dossier'=>$param->getName(),
                        'sourceName' => $sourceName,
                        'sourceLogo' => $source->getLogo(),
                        'demandeur' => $demandeur,
                        'courtier' => $courtier,
                        'controleur' => $controleur
                    ]);
                break;
            case 3:
                $email
                    ->to($param->getControleur()->getEmail())
                    ->addCc($param->getCourtier()->getEmail())
                    ->subject($sourceName.' - Contrôler les documents de M(me)'.' '.$demandeur)
                    ->htmlTemplate('email/controleDossier.html.twig')
                    ->context([
                        'dossier'=>$param->getName(),
                        'sourceName' => $sourceName,
                        'sourceLogo' => $source->getLogo(),
                        'demandeur' => $demandeur,
                        'courtier' => $courtier,
                        'controleur' => $controleur
                    ]);
                break;
            case 4:
                $email
                    ->to($param->getDemandeur()->getEmail())
                    ->addCc($param->getCourtier()->getEmail())
                    ->subject($sourceName.' - Félicitation votre dossier a été validé par M(me)'.' '.$controleur)
                    ->htmlTemplate('email/validationDossier.html.twig')
                    ->context([
                        'dossier'=>$param->getName(),
                        'sourceName' => $sourceName,
                        'sourceLogo' => $source->getLogo(),
                        'demandeur' => $demandeur,
                        'courtier' => $courtier,
                        'controleur' => $controleur,
                        'commentaire' => $comment
                    ]);
                break;
            case 5:
                $email
                    ->to($param->getDemandeur()->getEmail())
                    ->addCc($param->getCourtier()->getEmail())
                    ->subject($sourceName.' - M(me) '.$controleur.' vous demande de vérifier vos documents')
                    ->htmlTemplate('email/completionDossier.html.twig')
                    ->context([
                        'dossier'=>$param->getName(),
                        'sourceName' => $sourceName,
                        'sourceLogo' => $source->getLogo(),
                        'demandeur' => $demandeur,
                        'courtier' => $courtier,
                        'controleur' => $controleur,
                        'commentaire' => $comment
                    ]);
                break;
            case -1:
                $email
                    ->to($param->getDemandeur()->getEmail())
                    ->addCc($param->getCourtier()->getEmail())
                    ->subject($sourceName.' - M(me) '.$controleur.' a refusé votre dossier')
                    ->htmlTemplate('email/refusDossier.html.twig')
                    ->context([
                        'dossier'=>$param->getName(),
                        'sourceName' => $sourceName,
                        'sourceLogo' => $source->getLogo(),
                        'demandeur' => $demandeur,
                        'courtier' => $courtier,
                        'controleur' => $controleur,
                        'commentaire' => $comment
                    ]);
                break;
        }
        $this->mailer->send($email);
    }
    public function onEditRelaunchTime(EmailEvent $event)
    {
        $user = $event->getUser();
        $relaunchTime = $event->getParam();
        $email = (new Email())
            ->from('no-reply@fidoc.com')
            ->to($user->getEmail())
            ->subject('Délai de relance!')
            ->html('Bonjour M(me)' . $user->getFirstname() . ',<br><br> Le délai de relance de dossier est : ' . $relaunchTime->getPeriod() . ' Jours .<br><br> Cordialement.');
        $this->mailer->send($email);
    }
    public function onRelaunchTime(EmailEvent $event)
    {
        $param = $event->getUser();
        $email = (new Email())
            ->from('no-reply@fidoc.com')
            ->to($param->getDemandeur()->getEmail())
            ->subject('Délai de relance!')
            ->html('Bonjour M(me)' . $param->getDemandeur() ->getFirstname() . ',<br><br> Le délai de relance de dossier ' . $param->getName() . '  est dépasser .<br><br> Cordialement.');
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