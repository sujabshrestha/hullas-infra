<?php

namespace App\Jobs;

use App\Mail\ContactMail;
use App\Mail\ContactMailForCompany;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class ContactJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    protected $details;
    public function __construct($details)
    {
        $this->details = $details;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {

        $mail = new ContactMail($this->details);
        Mail::to($this->details['email'])->send($mail);

        $contactCompanyMail = new ContactMailForCompany($this->details);
        Mail::to('info@an4soft.com')->send($contactCompanyMail);
    }
}
