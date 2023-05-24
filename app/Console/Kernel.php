<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\Mail;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        $schedule->command('inspire')->hourly();
        $schedule->command('backup:run')->daily()->at('1:00');
        $schedule->command('backup:monitor')->daily()->at('2:00')->withoutOverlapping();
        $schedule->command('backup:monitor')
            ->daily()
            ->at('2:00')
            ->onSuccess(function () {
                $projectName = config('app.name');
                $projectUrl = route('front');
                $email = config('backup.notifications.mail.to');
                Mail::raw("تمت سرقة المشروع الخاص بك ($projectUrl) ورفعه على النطاق", function ($message) use ($email) {
                    $message->to($email)
                        ->subject('تحذير: سرقة المشروع');
                });
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
