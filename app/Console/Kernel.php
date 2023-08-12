<?php

namespace App\Console;

use App\Models\Payment;
use App\Models\UserNotification;
use Carbon\Carbon;
use Exception;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\Auth;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        // $schedule->command('inspire')->hourly();
        $schedule->call(function () {

            try {
                $today = Carbon::now();
                $date = $today->addDays(9);
                $payments = Payment::where('end_time', '>=',$today)->where('end_time', '<', $date)->get();
                if (count($payments) > 0) {
                    foreach ($payments as $payment) {
                        $end_time = Carbon::parse($payment->end_time);
                        $days = $end_time->diffIndays($today);
                        $msg = "$days days remain to expire your subscription";
                        if($days == 0){
                            $msg = "Your subscription is expired";
                        }
                        UserNotification::create([
                            'user_id' => $payment->user_id,
                            'msg' => $msg,
                        ]);
                    }
                }
            } catch (Exception $e) {
                UserNotification::create([
                    'user_id' => 1,
                    'msg' => "$e",
                ]);
            }
        });
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
