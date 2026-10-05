<?php

namespace App\Console\Commands;

use App\Models\Lead;
use App\Mail\Reminder7dMail;
use App\Mail\Reminder14dMail;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;

#[Signature('brochure:send-reminders')]
#[Description('Send automated 7-day and 14-day reminders to leads who have not opened their brochure links.')]
class SendReminders extends Command
{
    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Scanning for pending reminders...');

        $now = now();
        $sevenDaysAgo = $now->copy()->subDays(7);
        $fourteenDaysAgo = $now->copy()->subDays(14);

        // 1. Process 14-day reminders (first, so we don't send 7-day and 14-day at the same time)
        $pending14dLeads = Lead::whereNull('opened_at')
            ->whereNull('reminder_14d_sent_at')
            ->where('created_at', '<=', $fourteenDaysAgo)
            ->get();

        $this->info("Found {$pending14dLeads->count()} leads pending 14-day reminder.");
        foreach ($pending14dLeads as $lead) {
            try {
                Mail::to($lead->email)->send(new Reminder14dMail($lead));
                $lead->update(['reminder_14d_sent_at' => $now]);
                $this->line("Sent 14-day reminder to {$lead->email}");
            } catch (\Exception $e) {
                $this->error("Failed to send 14-day reminder to {$lead->email}: " . $e->getMessage());
            }
        }

        // 2. Process 7-day reminders
        $pending7dLeads = Lead::whereNull('opened_at')
            ->whereNull('reminder_7d_sent_at')
            ->where('created_at', '<=', $sevenDaysAgo)
            ->get();

        $this->info("Found {$pending7dLeads->count()} leads pending 7-day reminder.");
        foreach ($pending7dLeads as $lead) {
            try {
                Mail::to($lead->email)->send(new Reminder7dMail($lead));
                $lead->update(['reminder_7d_sent_at' => $now]);
                $this->line("Sent 7-day reminder to {$lead->email}");
            } catch (\Exception $e) {
                $this->error("Failed to send 7-day reminder to {$lead->email}: " . $e->getMessage());
            }
        }

        $this->info('Reminder check complete.');
        return 0;
    }
}
