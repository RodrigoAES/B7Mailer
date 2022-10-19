<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

use App\Mail\RegisterEmail;
use Illuminate\Support\Facades\Mail;
use App\Models\User;

class SendAuthMail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $user;
    public function __construct(User $user) 
    {
        $this->user = $user;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {   
        $registerEmail = new RegisterEmail($this->user);

        Mail::to('rodrigoaes.20@hotmail.com')
        ->cc('email@email.com')
        ->bcc('email2@email.com')
        ->send($registerEmail);
    }
}
