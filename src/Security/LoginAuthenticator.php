<?php 
// src/Security/LoginAuthenticator.php
namespace App\Security;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Http\Authenticator\AbstractAuthenticator;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\PasswordCredentialsBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\UserBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Passport;
use Symfony\Component\Security\Http\Authenticator\Passport\SelfValidatingPassport;
use Symfony\Component\Security\Http\Util\TargetPathTrait;

class LoginAuthenticator extends AbstractAuthenticator
{
    use TargetPathTrait;

    private RouterInterface $router;

    public function __construct(RouterInterface $router)
    {
        $this->router = $router;
    }

    public function supports(Request $request): ?bool
    {
        return $request->attributes->get('_route') === 'app_login' && $request->isMethod('POST');
    }

    public function authenticate(Request $request): Passport
    {
        // Essayer de récupérer l'email via plusieurs méthodes
        $email = $request->get('email') ?? $request->request->get('email') ?? $request->get('username');

        if (!$email) {
            throw new \UnexpectedValueException('Aucun email fourni lors de l\'authentification.');
        }

        return new SelfValidatingPassport(new UserBadge($email));
    }


    public function onAuthenticationSuccess(Request $request, TokenInterface $token, string $firewallName): RedirectResponse
    {
        $user = $token->getUser();
        $roles = $user->getRoles();

        

        if (in_array('ROLE_CLIENT', $roles, true)) {
            return new RedirectResponse($this->router->generate('app_home'));
        }

        // Sinon (Admin ou Artisan), rediriger vers app_admin
        return new RedirectResponse($this->router->generate('app_admin'));
    }

    public function onAuthenticationFailure(Request $request, AuthenticationException $exception): RedirectResponse
    {
        return new RedirectResponse($this->router->generate('app_login'));
    }
}
