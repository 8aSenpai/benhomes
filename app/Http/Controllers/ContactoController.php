<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function view(){
    	return view('contacto');
    }
    public function send(Request $request)
    { 
		    $to = "ing8amario@gmail.com"; // this is your Email address
		    $from = $_POST['email']; // this is the sender's Email address
		    $first_name = $_POST['nombre']; 
		    $telefono = $_POST['telefono'];
		    $subject = "Form submission";
		    $subject2 = "Copy of your form submission";
		    $message = "Nombre: " . $first_name . " " . "\n\n" . " Email: ". $from . "\n\n" . "Telefono: ". $telefono . "\n\n"  . $_POST['message'];
		    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

		    $headers = "From:" . $from;
		    $headers2 = "From:" . $to;
		    mail($to,$subject,$message,$headers);
		    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender 
		    // You cannot use header and echo together. It's one or the other. 
    	return back()->with('success','Gracias por contactarnos nos pondremos en contacto lo mas pronto posible');
    }
}
