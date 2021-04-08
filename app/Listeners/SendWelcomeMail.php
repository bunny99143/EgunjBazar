<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Mail;

class SendWelcomeMail
{
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
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $customer=$event->user_order_data->customer;

        $data = [
            'customer' => $customer,
          ];
        if(isset($customer->email) && !empty($customer->email)){
            Mail::send('email-welcome-template', $data, function($message) use ($data) {
                $message->to($data['customer']->email)
                ->subject('Welcome to E-Gunj Bazar');
              });    
        }
    }
}
