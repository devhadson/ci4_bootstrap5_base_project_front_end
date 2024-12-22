<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $this->data['page_title'] = "Home";
        $this->data['page_description'] = "Page home";
        return view('pages\public\home', $this->data);
    }

    public function about()
    {
        $this->data['page_title'] = "About";
        $this->data['page_description'] = "Page about";
        return view('pages\public\about', $this->data);
    }

    public function services()
    {
        $this->data['page_title'] = "Services";
        $this->data['page_description'] = "Page Services";
        return view('pages\public\services', $this->data);
    }

    public function projects()
    {
        $this->data['page_title'] = "Projects";
        $this->data['page_description'] = "Page projects";
        return view('pages\public\projects', $this->data);
    }

    public function contact()
    {
        $this->data['page_title'] = "Contact";
        $this->data['page_description'] = "Page contact";
        return view('pages\public\contact', $this->data);
    }
}