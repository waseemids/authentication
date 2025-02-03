<?php
namespace SoampliApps\Authentication\Providers;

interface CookiePersistantProviderInterface extends PersistantProviderInterface
{
    public function rememberUser($ttl = 604800);
}
