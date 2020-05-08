<?php


namespace Azak1r\Tracker\Http\Controller;

use Seat\Web\Http\Controllers\Controller;

class TrackerController
{
    public function getProjectsView()
    {
        $projects = [];

        return view('tracker::index', compact('projects'));
    }
}