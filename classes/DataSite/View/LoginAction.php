<?php
namespace DataSite\View;

use Id1354fw\View\AbstractRequestHandler;
use DataSite\Util\Constants;

class LoginAction extends AbstractRequestHandler
{

    private $username;
    private $password;

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }


    protected function doExecute()
    {
        $contr = $this->session->get(Constants::CONTR_KEY_NAME);

        $contr->authenticateUser($username, $password);
        $this->session->set(Constants::CONTR_KEY_NAME, $contr);

        return 'subfolder/login';

    }

}
