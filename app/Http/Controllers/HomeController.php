<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $projects =Project::all();
        return view('project',compact('projects'));
    }

    public function by_category($id){
        $projects =Project::whereCategoryId($id)->get();
        return view('project',compact('projects'));
    }
}
