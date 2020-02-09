<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ProductMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $product_name      =" ";
    public $product_price     =" ";
    public $product_quantity  =" ";
    public $product_description  =" ";


    public function __construct($product_name,$product_price,$product_quantity,$product_description)
    {
        $this->product_name           = $product_name;
        $this->product_price          = $product_price;
        $this->product_quantity       = $product_quantity;
        $this->product_description    = $product_description;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $product_name         = " ";
        $product_price        =" ";
        $product_quantity     =" ";
        $product_description  =" ";
        return $this->view('email.product_mail',compact('product_name','product_price','product_quantity','product_description'));
    }
}
