<?php
namespace DataSite\View;

use Id1354fw\View\AbstractRequestHandler;
use DataSite\Util\Constants;


class MeatballPage extends AbstractRequestHandler
{


    protected function doExecute()
    {
        return 'subfolder/meatballs';
    }

}
