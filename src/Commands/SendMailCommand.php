<?php

namespace Icrewsystems\WelcomeMail\Commands;

use Icrewsystems\WelcomeMail\Mail\WelcomeMail;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendMailCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'A command to send email to the user ';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
       $name = $this->ask('Enter user name');
       $emailId = $this->ask('Enter user email');

       // added git tags
       $mail = new WelcomeMail($name);
       Mail::to($emailId)->send($mail);

       $this->info('Email sent to '.$name.' successfully');
    }
}
