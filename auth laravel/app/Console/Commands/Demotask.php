<?php

namespace App\Console\Commands;
use App\models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

use App\Mail\taskmail;
class Demotask extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:sendemail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'product update email';

    /**
     * Execute the console command.
     */

     public function __construct()
     
     {
        parent::__construct();
    
     }
    public function handle()
    {
        //$email=new taskmail($this->user);
        
       // Mail::to($this->user['email'])->send($email);

       $usermail=User::select('email')->get();
       $emails=[];
       foreach ($usermail as $email) {
        $emails[] = $email->email;
       }
       Mail::send('happy',[],function($message) use ($emails){
        $message->to($emails)->subject('this product update');
       });

    }

}
