<?php

namespace Javaabu\CriminalJusticeSectorDataShare;

use Javaabu\CriminalJusticeSectorDataShare\Http\AuthorizedClient;
use Javaabu\CriminalJusticeSectorDataShare\Models\CourtCase;
use Javaabu\CriminalJusticeSectorDataShare\Models\CriminalCase;
use Javaabu\CriminalJusticeSectorDataShare\Models\Institution;

class CriminalJusticeSectorDataShareClass
{
    private AuthorizedClient $authorizedClient;

    protected CriminalCase $criminalCase;

    protected CourtCase $courtCase;

    protected Institution $institution;

    public function __construct(
        protected string $baseUri,
        protected string $accessToken,

    ) {
        $this->authorizedClient = new AuthorizedClient($this->baseUri, $this->accessToken);
        $this->criminalCase = new CriminalCase($this->authorizedClient);
        $this->courtCase = new CourtCase($this->authorizedClient);
        $this->institution = new Institution($this->authorizedClient);
    }

    public function criminalCase(): ?CriminalCase
    {
        return $this->criminalCase;
    }

    public function courtCase(): ?CourtCase
    {
        return $this->courtCase;
    }

    public function institution(): ?Institution
    {
        return $this->institution;
    }
}
