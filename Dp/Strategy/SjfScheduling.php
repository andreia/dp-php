<?php

namespace Dp\Strategy;

class SjfScheduling implements SchedulingInterface
{
    /**
     * Calculate the average wait time for a group of processes
     * using the Short Job First (SJF) Scheduling Algorithm
     * 
     * @param array $processes  Arrival and execute time of the processes
     *
     * @return float  The average wait time
     **/
    public function averageWaitTime(array $processes)
    {
        usort($processes, function ($a, $b) {
            return strcmp($a['execute-time'], $b['execute-time']);
        });

        $serviceTime = 0;
        $s = 0;

        foreach($processes as $v){
            $waitTime = $serviceTime - $v['arrival-time'];
            $serviceTime += $v['execute-time'];
            $s += $waitTime;
        }

        return $s / count($processes);
    }
}

