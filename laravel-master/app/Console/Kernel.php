<?php

namespace App\Console;  

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

use App\Http\Models\Laravel_remind;
use Illuminate\Support\Facades\Redis; // Redis
class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        // Commands\Inspire::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->call(function()
        {
             // 取出Redis 存入提醒表
            $num = Redis::llen('schedule'); //存入redis
            if ($num != 0) {
                if ($num >= 100) { $num = 100;}

                for ($i=1; $i <= $num; $i++) {
                    $remind = new Laravel_remind;
                    $arr = json_decode(Redis::rpop('schedule'),true);
                    $arr['r_type'] = 'schedule';
                    $remind->add($arr);
                }
            }

        })->everyMinute();
    }
}
