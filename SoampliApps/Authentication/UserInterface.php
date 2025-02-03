<?php
namespace SoampliApps\Authentication;

interface UserInterface
{
    public function getId();
    public function getPassword();
}
