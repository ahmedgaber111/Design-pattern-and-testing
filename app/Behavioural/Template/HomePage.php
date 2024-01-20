<?php

namespace App\Behavioural\Template;

class HomePage extends Page
{
    protected function getPageHeader():string
  {
      return '<header>Load Css and js files</header>';
  }
    protected function getPageNov():string
    {
        return "<nav>Navigation List</nav>";
    }
    protected function getPageBody():string
    {
        return "<body>List of new feeds</body>";
    }
    protected function getPageFooter():string
    {
        return "<footer>Contact us and site map</footer>";
    }

}
