<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

       public function login(){
        $this->form_validation->set_rules('username','Username','trim|required|min_length[4]|xss_clean');      
        $this->form_validation->set_rules('password','Password','trim|required|min_length[4]|max_length[50]|xss_clean');        
        
        if($this->form_validation->run() == FALSE){
            //Set error
            $this->session->set_flashdata('login_failed', 'Sorry, Login info is invalid');
            redirect('main/index');
        } else {
           //Get data from post
           $username = $this->input->post('username');
           $password = $this->input->post('password');
               
           //Get user id from the model
           $user_id = $this->User_model->login_user($username,$password);
               
           //Validate the user
           if($user_id){
               //Create array of user data
               $user_data = array(
                       'user_id'   => $user_id,
                       'username'  => $username,
                       'logged_in' => true
                );
                //Set session userdata
               $this->session->set_userdata($user_data);
                                  
               redirect('main/index');
            } else {
                //Set error
                $this->session->set_flashdata('login_failed', 'Sorry, the login info that you entered is invalid');
                redirect('main/index');
            }
        }
    }

}