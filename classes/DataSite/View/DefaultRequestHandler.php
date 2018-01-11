<?php

namespace DataSite\View;

use Id1354fw\View\AbstractRequestHandler;
use DataSite\Controller\Controller;
use DataSite\Util\Constants;

class DefaultRequestHandler extends AbstractRequestHandler
{

    protected function doExecute()
    {
        $this->session->restart();
        $this->session->set(Constants::CONTR_KEY_NAME, new Controller());
        \header('Location: /seminar4_5-fw/DataSite/View/FirstPage');
    }

}
