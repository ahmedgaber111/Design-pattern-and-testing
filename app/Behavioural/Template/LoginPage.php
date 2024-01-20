<?php

namespace App\Behavioural\Template;

class LoginPage extends Page
{
    protected function getPageHeader():string
    {
        return "<header>Load Css and js files</header>";
    }
    protected function getPageNov():string
    {
        return "";
    }
    protected function getPageBody():string
    {
        return "<body>Login Form</body>";
    }
    protected function getPageFooter():string
    {
        return "<footer>Contact us and site map</footer>";
    }

}
