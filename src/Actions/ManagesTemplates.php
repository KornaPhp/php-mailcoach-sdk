<?php
namespace Spatie\MailcoachSdk\Actions;

use Spatie\MailcoachSdk\Resources\Template;
use Spatie\MailcoachSdk\Support\PaginatedResults;

trait ManagesTemplates
{
    public function templates(): PaginatedResults
    {
        return PaginatedResults::make(
            'templates',
            Template::class,
            $this
        );
    }

    public function template(string $uuid): Template
    {
        $attributes = $this->get("templates/{$uuid}")['data'];

        return new Template($attributes, $this);
    }

}
