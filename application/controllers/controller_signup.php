<?php

class Controller_Signup extends Controller
{
    function action_index()
    {
        if($_SERVER['REQUEST_METHOD'] === 'POST')
        {
            $message = '';
            if (isset($_POST['nick']))
            {
                $nick = $_POST['nick'];
                $nick = stripslashes($nick);
                $nick = htmlspecialchars($nick);
                $nick = trim($nick);
                if ($nick == '')
                {
                    unset($nick);
                    $message = $message.'Nick is wrong ';
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
                    $message = $message.'Pass is wrong ';
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
                    $message = $message.'Email is wrong ';
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
                    $message = $message.'Name is wrong ';
                    unset($name);
                }
            }
            if(empty($nick)) $message = $message.'-N';
            if(empty($password)) $message = $message.'-P';
            if(empty($email)) $message = $message.'-E';
            if(empty($name)) $message = $message.'-NM';
            if (empty($nick) or empty($password) or empty($email) or empty($name))
            {
                $message = 'Some error with data: '.$message;
                $this->view->generate('signup_view.php', 'template_view.php', $message);
            }
            else
            {
                $data = array
                (
                    'nick' => $nick,
                    'password' => md5(md5($password)),
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
        else
        {
            $this->view->generate('signup_view.php', 'template_view.php');
        }
    }
}