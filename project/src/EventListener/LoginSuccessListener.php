<?php 
namespace App\EventListener;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Http\Event\LoginSuccessEvent;

class LoginSuccessListener
{
    private $urlGenerator;

    public function __construct(UrlGeneratorInterface $urlGenerator)
    {
        $this->urlGenerator = $urlGenerator;
    }

    public function onLoginSuccess(LoginSuccessEvent $event): void
    {
        $user = $event->getUser();

        if (in_array('ROLE_ADMIN', $user->getRoles())) {
            $event->setResponse(new RedirectResponse($this->urlGenerator->generate('app_admin')));
        } else {
            $event->setResponse(new RedirectResponse($this->urlGenerator->generate('app_home')));
        }
    }
}