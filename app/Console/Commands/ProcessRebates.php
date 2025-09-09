<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ProcessRebates extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:process-rebates';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $rebates = \App\Models\RebateSchedule::where('status','scheduled')
            ->where('due_date','<=',now())
            ->get();

        foreach ($rebates as $rebate) {
            $rebate->update([
                'status' => 'paid',
                'paid_at' => now()
            ]);
        }

        $this->info("Processed ".count($rebates)." rebates.");
    }

}
