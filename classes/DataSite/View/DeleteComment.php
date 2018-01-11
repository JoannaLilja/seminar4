<?php
namespace DataSite\View;

use Id1354fw\View\AbstractRequestHandler;
use DataSite\Util\Constants;


class DeleteComment extends AbstractRequestHandler
{

    private $id;
    private $type;

    public function setId($id)
    {
        $this->id = $id;
    }
    public function setType($type)
    {
        $this->type = $type;
    }

    protected function doExecute()
    {

        $contr = $this->session->get(Constants::CONTR_KEY_NAME);
        $contr->deleteComment($this->id);

        $this->addVariable('allComments', $contr->getAllDBComments("meatballs"));

        $returnTo = 'subfolder/' . $this->type;
        return $returnTo;

    }

}
