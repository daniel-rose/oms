<?php

namespace SprykerFeature\Zed\Oms\Business\Process;

class Transition implements TransitionInterface
{

    /**
     * @var EventInterface
     */
    protected $event;

    protected $condition;

    /**
     * @var bool
     */
    protected $happy;

    /**
     * @var StateInterface
     */
    private $source;

    /**
     * @var StateInterface
     */
    protected $target;

    /**
     * @param mixed $happy
     */
    public function setHappy($happy)
    {
        $this->happy = $happy;
    }

    /**
     * @return bool
     */
    public function isHappy()
    {
        return $this->happy;
    }

    /**
     * @param string $condition
     */
    public function setCondition($condition)
    {
        $this->condition = $condition;
    }

    /**
     * @return string
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * @return bool
     */
    public function hasCondition()
    {
        return isset($this->condition);
    }

    /**
     * @param EventInterface $event
     */
    public function setEvent($event)
    {
        $this->event = $event;
    }

    /**
     * @return EventInterface
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * @return bool
     */
    public function hasEvent()
    {
        return isset($this->event);
    }

    /**
     * @param StateInterface $source
     */
    public function setSource($source)
    {
        $this->source = $source;
    }

    /**
     * @return StateInterface
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param StateInterface $target
     */
    public function setTarget($target)
    {
        $this->target = $target;
    }

    /**
     * @return StateInterface
     */
    public function getTarget()
    {
        return $this->target;
    }

}