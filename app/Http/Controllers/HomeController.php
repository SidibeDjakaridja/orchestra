<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function home()
    {
        $data['title'] ="Accueil";
        $data['menu'] ='accueil';

        return view('home',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function indexBlog()
    {
        $data['title'] ="Blog";
        $data['menu'] ='blog';

        return view('blog.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function indexWork()
    {
        $data['title'] ="Work";
        $data['menu'] ='work';

        return view('work.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function showWork()
    {
        $data['title'] ="Work";
        $data['menu'] ='work';

        return view('work.show',$data);
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
    public function show(Home $home)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Home $home)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Home $home)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Home $home)
    {
        //
    }
}
