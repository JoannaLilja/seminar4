<?php
namespace DataSite\View;

use Id1354fw\View\AbstractRequestHandler;
use DataSite\Util\Constants;

class AddComment extends AbstractRequestHandler
{

    private $username;
    private $comment;
    private $type;

    public function setUsername($username)
    {
        $this->username = $username;

    }

    public function setComment($comment)
    {
        $this->comment = $comment;

    }

    public function setType($type)
    {
        $this->type = $type;

    }

    protected function doExecute()
    {

        $contr = $this->session->get(Constants::CONTR_KEY_NAME);

        $contr->addComment($this->username,$this->comment,$this->type);

        $this->addVariable('allComments', $contr->getAllDBComments($this->type));

        $returnTo = 'subfolder/' . $this->type;
        return $returnTo;

    }

}
