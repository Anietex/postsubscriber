<?php

namespace App\Listeners;

use App\Events\PostCreated;
use App\Mail\NewPostMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class NotifyWebsiteSubscribers implements ShouldQueue
{


    /**
     * Use database queue connection
     * @var string
     */
    public $connection = 'database';





    /*
     * Delay 5 secs
     * */
    public $delay = 5;


    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\PostCreated  $event
     * @return void
     */
    public function handle(PostCreated $event)
    {
        $post = $event->post;
        $website = $post->website;
        $subscribers = $website->subscribers;
        foreach ($subscribers as $subscriber){
            Mail::to($subscriber->email)->queue(new NewPostMail($post));
        }

    }
}
