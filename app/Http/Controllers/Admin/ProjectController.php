<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{


    public function index() {

        $projects = Project :: all();
        return view("index", compact('projects'));

	}


    public function show($id) {

        $projects = Project :: findOrFail($id);
        return view("show", compact('projects'));

	}

}
