<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Jobs\SendDailySalesReport;

class SendDailySalesReportCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'report:daily-sales';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send the daily sales report email to the admin';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // Dispatch the queued job
        SendDailySalesReport::dispatch();

        $this->info('Daily sales report job dispatched successfully.');
    }
}
