<?php

namespace Dp\Strategy;

interface SchedulingInterface
{
    public function averageWaitTime(array $processes);
}
