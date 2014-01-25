<?php

namespace Dp\Strategy;

use Dp\Strategy\SchedulingInterface;

abstract class ProcessScheduling
{
    protected SchedulingInterface $schedulingAlgorithm;

    public function averageWaitTime(array $processes);
    {
        return $schedulingAlgorithm->averageWaitTime(array $processes);
    }
}
