<?php

namespace App\Behavioural\ChainOfResposnsibilty;

class MohsenHandler extends AbstractHandler
{

    public function handle(Request $request)
    {
        if ($request->getId()%3==0)
        {
        $request->setDone(true);
        $request->setHandler(self::class);
        return $request;
        }
        return  parent::handle($request);
    }
}
