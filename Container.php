<?php
/**
 * Created by PhpStorm.
 * User: jyl
 * Date: 2019/2/20
 * Time: 10:34 AM
 */

declare(strict_types = 1);

namespace ContainerCore;

class Container
{
    public $binds;
    public $instances;

    /**
     * @param mixed $abstract
     * @param mixed $concreate
     */
    public function bind($abstract, $concreate)
    {
        if ($concreate instanceof \Closure)
            $this->binds[$abstract] = $concreate;
        else
            $this->instances[$abstract] = $concreate;
    }

    /**
     * make binds function() {}
     *
     * @param mixed $abstract
     * @param array $parameters
     *
     * @return
     */
    public function make($abstract, array $parameters = [])
    {
        if (isset($this->instances[$abstract]))
            return $this->instances[$abstract];

        array_unshift($parameters, $this);

        return call_user_func_array($this->binds[$abstract], $parameters);
    }
}