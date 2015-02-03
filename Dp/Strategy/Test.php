<?php

namespace Dp\Strategy;

use Dp\Strategy\ProcessScheduling;

class Test
{
    protected $processScheduling;

    public function test(){
        $processScheduling = new SjfScheduling();

        $processes = [
            [
                'arrival-time' => 1,
                'execute-time' => 3,
            ],
            [
                'arrival-time' => 0,
                'execute-time' => 4,
            ],
            [
                'arrival-time' => 2,
                'execute-time' => 8,
            ],
            [
                'arrival-time' => 3,
                'execute-time' => 6,
            ],
        ];

        return $processScheduling->averageWaitTime($processes);
    }
}
