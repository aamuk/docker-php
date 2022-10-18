<?php

declare(strict_types=1);

namespace popp\ch10\batch07;

/* listing 10.35 */
class AuthenticateRequest extends DecorateProcess
{
    public function process(RequestHelper $req): void
    {
        print __CLASS__ . ": authenticating request\n";
        $this->processrequest->process($req);
    }
}
