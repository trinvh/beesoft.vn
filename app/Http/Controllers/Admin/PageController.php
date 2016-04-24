<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Page;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Page::all();
        return view('backend.pages.index')
            ->withPages($pages);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputs = $request->all();
        $rules = [
            'name'  => 'required|min:3',
            'content' => 'required'
        ];
        $validator = \Validator::make($inputs, $rules);
        if($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator->errors())
                ->withInput();
        } else {
            $page = new Page();
            $page->slug = str_slug($inputs['name']);
            $page->{'name:vi'} = $inputs['name'];
            $page->{'name:en'} = $inputs['name_en'];
            $page->{'content:vi'} = $inputs['content'];
            $page->{'content:en'} = $inputs['content_en'];
            $page->viewed = 0;
            $page->save();
            return redirect('/admin/page')->withSuccess('Thêm trang thành công ');
        }
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
        $page = Page::find($id);
        return view('backend.pages.edit')
        	->with('page', $page);
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
        $inputs = $request->all();
        $rules = [
            'name'  => 'required|min:3',
            'content' => 'required'
        ];
        $validator = \Validator::make($inputs, $rules);
        if($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator->errors())
                ->withInput();
        } else {
            $page = Page::find($id);
            $page->slug = str_slug($inputs['name']);
            $page->{'name:vi'} = $inputs['name'];
            $page->{'name:en'} = $inputs['name_en'];
            $page->{'content:vi'} = $inputs['content'];
            $page->{'content:en'} = $inputs['content_en'];
            $page->save();
            return redirect('/admin/page')->withSuccess('Sửa chi tiết trang thành công ');
        }
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
