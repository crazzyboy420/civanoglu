<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Flasher\Prime\FlasherInterface;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page = Page::latest()->paginate(15);
        return view('admin.page.page',['pages' =>$page]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.page.add-page');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function pageValidate(){
        return [
            'name' => 'required',
            'slug' => 'required',
            'contents' => 'required',
        ];
    }
    public function saveAndUpdate($page,$request){
        $page->name = $request->name;
        $page->slug = $request->slug;
        $page->content = $request->contents;
        $page->save();
    }
    public function store(Request $request, FlasherInterface $flasher)
    {
        $request->validate($this->pageValidate());
        $page = new Page();
        $this->saveAndUpdate($page,$request);
        $flasher->addSuccess('Page Created Successfully');
        return redirect(route('admin-page.index'));
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
        $page = Page::findOrFail($id);
        return view('admin.page.edit-page',['page'=>$page]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id,FlasherInterface $flasher)
    {
       $request->validate($this->pageValidate());

       $page = Page::findOrFail($id);
       $this->saveAndUpdate($page,$request);
        $flasher->addSuccess('Page Update Successully');
        return redirect(route('admin-page.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,FlasherInterface $flasher)
    {
        $page = Page::findOrFail($id);
        $page->delete();
        $flasher->addSuccess('Page Deleted Successully');
        return back();
    }
}


