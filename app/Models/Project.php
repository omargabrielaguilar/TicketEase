<?php

namespace App\Models;

class Project
{
    public function __construct(protected $title)
    {
        $this->title = $title;
    }

    /**
     * @param  mixed  $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }
}
