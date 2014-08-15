<?php

class Controller_Signup extends Controller
{
    function action_index()
    {
        $data = null;
        if($_SERVER['REQUEST_METHOD'] === 'POST')
        {
            $data['nick'] = $_POST['nick'];
        }
        $this->view->generate('signup_view.php', 'template_view.php', $data);
    }
}