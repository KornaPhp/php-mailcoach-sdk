<?php

namespace Spatie\MailcoachSdk\Resources;

use Spatie\MailcoachSdk\Actions\ManagesTemplates;

class Template extends ApiResource
{

    public string $uuid;

    public string $name;

    public ?string $html;

    public ?string $structuredHtml;

    public ?string $createdAt;

    public ?string $updatedAt;
}
