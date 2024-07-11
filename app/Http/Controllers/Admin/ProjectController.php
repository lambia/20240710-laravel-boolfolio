<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();

        $data = [
            "progetti" => $projects
        ];

        //dalla cartella: /resources/view/
        //prendi la vista: admin/projects/index.blade.php
        return view("admin.projects.index", $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        // $project->category_id <--- contiene l'id della categoria di questo Project

        // basandomi sull'id, trovo la categoria corrispondente
        $category = Category::find( $project->category_id );

        //aggiungo al project una proprietà "category"
        //ci copio dentro l'oggetto Category che ho trovato prima
        //dalla vista potrò stampare $progetto->category->name
        $project->categoriaPresaManualmente = $category;

        $data = [
            "progetto" => $project
        ];

        //dalla cartella: /resources/view/
        //prendi la vista: admin/projects/show.blade.php
        return view("admin.projects.show", $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        //
    }
}
