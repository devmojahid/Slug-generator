<?php

namespace Mojahid\SlugGenerator;

class SlugGenerator
{
    public static function slug(string $slug): self
    {
        return new static($slug);
    }
    public function __construct(protected string $slug)
    {
    }

    public function gslug(): string
    {
        return str_replace(' ', '-', $this->slug);
    }
}
