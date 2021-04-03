<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Mail;

class MailSentOrderPlace
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
        $product=$event->user_order_data->product;
        $order_data=$event->user_order_data;
        $product->product_image=isset($product->product_image)?asset('images/product_image/').'/'.$product->product_image:'';

        $data = [
            'customer' => $customer,
            'order_data' => $order_data,
            'product' => $product
          ];
        if(isset($customer->email) && !empty($customer->email)){
            Mail::send('email-template', $data, function($message) use ($data) {
                $message->to($data['customer']->email)
                ->subject('E-Gunj Bazar');
              });    
        }
        

    }
}
