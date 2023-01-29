<?php

namespace Javaabu\CriminalJusticeSectorDataShare;

use Javaabu\CriminalJusticeSectorDataShare\Models\CriminalCase;

class CriminalJusticeSectorDataShareClass
{
    protected CriminalCase $criminalCase;

    public function __construct(
        protected string $baseUri,
        protected string $accessToken,

    )
    {
        $this->criminalCase = new CriminalCase($this->baseUri, $this->accessToken);
    }

    public function criminalCase() : ?CriminalCase
    {
        return $this->criminalCase;
    }



}
