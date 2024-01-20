<?php

namespace App\Behavioural\Template;

class RegisterPage extends Page
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
        return "<body>Register Form</body>";
    }
    protected function getPageFooter():string
    {
        return "";
    }
}
