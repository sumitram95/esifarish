<?php

namespace App\Jobs;

use App\Mail\SendRegisterMail;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendMailQueue implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $email;
    public $name;
    public $verification_code;
    /**
     * Create a new job instance.
     */
    public function __construct($email, $name, $verification_code)
    {
        $this->email = $email;
        $this->name = $name;
        $this->verification_code = $verification_code;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $emailData = [
            'name' => $this->name,
            'verification_code' => $this->verification_code,
        ];

        Mail::to($this->email)->send(new SendRegisterMail($emailData));
    }
}
