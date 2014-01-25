<?php

namespace Dp\Strategy;

class FcfsScheduling implements SchedulingInterface
{
    /**
     * Calculate the average wait time for a group of processes
     * using the First Come First Serve (FCFS) Scheduling Algorithm
     * 
     * @param array $processes  Arrival and execute time of the processes
     *
     * @return float  The average wait time
     **/
    public function averageWaitTime(array $processes)
    {
        usort($processes, function ($a, $b) {
            return strcmp($a['arrival-time'], $b['arrival-time']);
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
