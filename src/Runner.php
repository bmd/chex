<?php
namespace Chex;

/**
 * Class Runner
 * @package Chex
 */
class Runner
{
    /** @var array */
    public $results = [];

    /**
     * Runner constructor.
     * @param array $checks
     */
    public function __construct(array $checks = [])
    {
        $this->checks = $checks;
    }

    public function runChecks(string $group)
    {
        if (!array_key_exists($group, $this->checks)) {
            return [];
        }

        foreach ($this->checks[$group] as $name => $check) {
            $instance = new $check['class']();
            $this->results[$name] = $instance->check($check['settings']);
        }

        return $this->results;
    }
}