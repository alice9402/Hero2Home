<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_me extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('Header');
		$this->load->view('Contact_form');
	}
        public function contact()
        {
            if(empty($_POST['name'])  		||
            empty($_POST['email']) 		||
            empty($_POST['phone']) 		||
            empty($_POST['message'])	||
            !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
              {
                   echo "No arguments Provided!";
                   return false;
              }
                   
           $name = $_POST['name'];
           $email_address = $_POST['email'];
           $phone = $_POST['phone'];
           $message = $_POST['message'];
                   
           $to = 'contacto@h2h.com';
           $email_subject = "Contacto desde :  $name";
           $email_body = "Has recibido un nuevo mensaje del formulario de contacto.\n\n"."Detalles:\n\nNombre: $name\n\nEmail: $email_address\n\nTelefono: $phone\n\nMensaje:\n$message";
           $headers = "From: noreply@h2h.com\n";
           $headers .= "Reply-To: $email_address";	
           mail($to,$email_subject,$email_body,$headers);
           return true;
        }
}