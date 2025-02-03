<?php
namespace SoampliApps\Authentication\Providers;

interface PersistantProviderInterface extends ProviderInterface
{
    public function persistLogin();
}
