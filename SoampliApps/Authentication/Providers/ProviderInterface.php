<?php
namespace SoampliApps\Authentication\Providers;

interface ProviderInterface
{
    public function __construct(array $request, \SoampliApps\Authentication\UserFactoryInterface $user_factory, \SoampliApps\Authentication\UserGateway $user_gateway);
    public function hasAttemptedToLoginWithProvider();
    public function processLoginAttempt();
    public function logout();
    public function userWantsToBeRemembered();
    public function shouldPersist();
}
