<?php

namespace App;

class Navbar
{
    private $pages;
    private $pageTitles;
    private $active;

    public function __contruct($page =false)
    {
        $this->pages = [
            'home' => '',
            'features' => '',
            'pricing' => '',
            'about' => '',
            'signup' => '',
            'login' => '',
        ];

        $this->pageTitles = [
            'home' => 'TimeTrends',
            'features' => 'TimeTrends',
            'pricing' => 'TimeTrends',
            'about' => 'TimeTrends',
            'signup' => 'Sign up | TimeTrends',
            'login' => 'Log in | TimeTrends',
        ];

        if ($page !== false)
        {
            $this->setActive($page);
        }
    }

    public function setActive($page)
    {
        $this->pages[$page] = 'active';
        $this->active = $page;
    }

    public function state($page)
    {
        return $this->pages[$page];
    }

    public function title()
    {
        return $this->pageTitles[$this->active];
    }
}