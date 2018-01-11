<?php
namespace DataSite\View;

use Id1354fw\View\AbstractRequestHandler;
use DataSite\Util\Constants;

class PancakePage extends AbstractRequestHandler
{

  protected function doExecute()
  {
    return 'subfolder/pancakes';
  }

}
