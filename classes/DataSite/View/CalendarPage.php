<?php
namespace DataSite\View;

use Id1354fw\View\AbstractRequestHandler;

class CalendarPage extends AbstractRequestHandler
{
    protected function doExecute()
    {
        return 'subfolder/calendar';
    }

}
