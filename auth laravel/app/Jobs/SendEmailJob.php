<?php

namespace App\Jobs;
use App\Mail\SendEmailMailable;
use app\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

use App\Events\TaskEvent;
use Illuminate\Support\Facades\Mail;
class SendEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    
    /**
     * Create a new job instance.
     */
    public function __construct(private User $user)
    {
       $this->user=$user;
    }

    /**
     * Execute the job.
     */
    public function handle()
    {
        $email=new SendEmailMailable($this->user);
        
        Mail::to($this->user->all())->send($email);
       
        //$data=$this->user['email'];
    }
}
