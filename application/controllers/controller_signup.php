<?php

class Controller_Signup extends Controller
{
    function action_index()
    {
        if($_SERVER['REQUEST_METHOD'] === 'POST')
        {
            if (isset($_POST['nick']))
            {
                $nick = $_POST['nick'];
                $nick = stripslashes($nick);
                $nick = htmlspecialchars($nick);
                $nick = trim($nick);
                if ($nick == '')
                {
                    unset($nick);
                }
            }
            if (isset($_POST['password']) and isset($_POST['password_confirm']) and $_POST['password'] == $_POST['password_confirm'])
            {
                $password = $_POST['password'];
                $password = stripslashes($password);
                $password = htmlspecialchars($password);
                $password = trim($password);
                if ($password =='')
                {
                    unset($password);
                }
            }
            if (isset($_POST['email']) and filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
            {
                $email = $_POST['email'];
                $email = stripslashes($email);
                $email = htmlspecialchars($email);
                $email = trim($email);
                if ($email =='')
                {
                    unset($email);
                }
            }
            if (isset($_POST['name']))
            {
                $name = $_POST['name'];
                $name = stripslashes($name);
                $name = htmlspecialchars($name);
                $name = trim($name);
                if ($name == '')
                {
                    unset($name);
                }
            }
            if (empty($nick) or empty($password) or empty($email) or empty($name))
            {
                $this->view->generate('signup_view.php', 'template_view.php', 'Some error with data');
            }
            else
            {
                $data = array
                (
                    'nick' => $nick,
                    'password' => $password,
                    'email' => $email,
                    'name' => $name
                );
                $this->model = new Model_Signup();
                if($this->model->check_data($data['nick']) > 0)
                {
                    if($this->model->set_data($data) == 'TRUE')
                    {
                        $this->view->generate('signup_view.php', 'template_view.php', 'Success');
                    }
                    else
                    {
                        $this->view->generate('signup_view.php', 'template_view.php', 'Query error');
                    }
                }
                else
                {
                    $this->view->generate('signup_view.php', 'template_view.php', 'User with that nick already exists');
                }
            }
        }
        $this->view->generate('signup_view.php', 'template_view.php');
    }
}