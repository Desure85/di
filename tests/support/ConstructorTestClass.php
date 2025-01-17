<?php

namespace yii\di\tests\support;

/**
 * ConstructorTestClass
 */
class ConstructorTestClass
{
    private $parameter;

    
    /**
     * ConstructorTestClass constructor.
     * @param $parameter
     */
    public function __construct($parameter)
    {
        $this->parameter = $parameter;
    }

    /**
     * @return mixed
     */
    public function getParameter()
    {
        return $this->parameter;
    }
}
