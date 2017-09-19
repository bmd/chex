<?php
namespace Chex\Contracts;

/**
 * Class Checkable
 * @package Chex\Contracts
 */
interface Checkable
{
    public function check(array $config);
}