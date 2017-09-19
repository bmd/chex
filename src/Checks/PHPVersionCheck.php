<?php
namespace Chex\Checks;

use Chex\Contracts\Checkable;
use Chex\Statuses;

/**
 * Class PHPVersionCheck
 * @package Chex\Checks
 */
class PHPVersionCheck implements Checkable
{
    /**
     * @param array $config
     * @return array
     */
    public function check(array $config)
    {
        $version = $_SERVER['PHP_VERSION'] ?? phpversion();
        return [
            Statuses::STATUS_KEY => Statuses::STATUS_PASS,
            'version' => $version,
        ];
    }
}