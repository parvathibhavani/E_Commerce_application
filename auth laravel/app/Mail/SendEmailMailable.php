<?php

namespace App\Mail;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendEmailMailable extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
   
    public function __construct(private User $user)
    {
        $this->user=$user;
    }
    public function build()
    {
        //return $this->view("sucess")
        //->subject('welcome to our website');
    }
    public function envelope(): Envelope
    {
        return new Envelope(
            from: $this->user->email,
            subject: 'Send Email Mailable',
        );
    }
    /**
     * Get the message content definition.
     */
    public function content()
    {
        $name= $this->user->name;
        $email= $this->user->email;
        return new Content(
            view: 'sucess',
            with:[
                'name'=>$name,
                'email'=>$email
            ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
