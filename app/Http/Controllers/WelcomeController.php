<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //echo "Hello Nayan!This is your First Laravel controller method processing!";

        $home_content=view('pages.home_content');

        $sidebar=view('pages.sidebar');

        return view('master')->with('main_content',$home_content)
                                  ->with('sidebar',$sidebar);

    }
    public function blog_read_more(){
        $blog_details=view('pages.read_more');
        $sidebar=view('pages.sidebar');
        //$sidebar=0;
        return view('master')->with('main_content',$blog_details)
                                       ->with('sidebar',$sidebar);




    }
    public function blog(){
        $blog=view('pages.blog');
        $sidebar=view('pages.sidebar');

        return view('master')->with('main_content',$blog)
                                  ->with('sidebar',$sidebar);
    }
    public function about(){

        $about=view('pages.about');
        $sidebar=view('pages.sidebar');
        return view('master')->with('main_content',$about)
            ->with('sidebar',$sidebar);




    }
    public function contact(){

        //echo "This is Contact";
        $contact=view('pages.contact');

        return view('master')->with('main_content',$contact);



    }
    public function support(){

       $support=view('pages.support');
        $sidebar=view('pages.sidebar');
        return view('master')->with('main_content',$support)
            ->with('sidebar',$sidebar);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
