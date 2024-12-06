<?php

namespace App\EventSubscriber;

use App\Entity\Commandes;
use App\Repository\UtilisateursRepository;
use Doctrine\Common\EventSubscriber;
use Doctrine\ORM\Events;
use Doctrine\Persistence\Event\LifecycleEventArgs;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class CommandeSubscriber implements EventSubscriber
{
    private $mailer;
    private $utilisateurs;
    public function __construct(MailerInterface $mailer,UtilisateursRepository $utilisateurs)
    {
        $this->mailer = $mailer;
        $this->utilisateurs = $utilisateurs;
    }

    public function getSubscribedEvents()
    {
        //retourne un tableau d'événements (prePersist, postPersist, preUpdate etc...)
        return [
            //événement déclenché après l'insert dans la base de donnée
            Events::postPersist,
        ];
    }

    public function postPersist(LifecycleEventArgs $args)
    {
//        $args->getObject() nous retourne l'entité concernée par l'événement postPersist
        $entity = $args->getObject();


        if ($entity instanceof Commandes) {

            $utilisateurs = $this->utilisateurs->find($entity->getUtilisateurs());

                $email = (new Email())
                    ->from('villagegreen@gmail.com')
                    ->to($utilisateurs->getEmail())
                    ->subject('Commande validée')
                    ->text("Votre commande à bien été pris en compte et sera traité prochainnement");

                $this->mailer->send($email);
            }

        }
    }