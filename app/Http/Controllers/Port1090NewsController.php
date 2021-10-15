<?php

namespace App\Http\Controllers;

use App\Models\documentary;
use Illuminate\Http\Request;
use App\Models\port1090News;

class Port1090NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = port1090News::paginate(5);
        return view('port1090news')->with('newses', $news);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create1090news');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:port1090_news|max:1000',
            'shortContent' => 'required',
            'content' => 'nullable'
        ]);

        //if user doesn't upload an image, use noimage.png for the menu
        $imageName = "noimage.png";

        //if user upload image
        if ($request->image) {
            $request->validate([
                'image' => 'nullable|file|image|mimes:jpeg,png,jpg|max:5000'
            ]);
            $imageName = date('mdYHis') . uniqid() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
        }

        //save information to News table
        $news = new port1090News;
        $news->title = $request->title;
        $news->shortContent = $request->shortContent;
        $news->content = $request->content;
        $news->image = $imageName;
        $news->save();

        $request->session()->flash('status', $request->title . ' is saved successfully');
        return redirect('port1090news');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $news = port1090News::find($id);
        $otherNews = port1090News::all()->take(4);
        $documentaries = documentary::where('port1090_news_id', $id)->get();
        return view('port1090newsDetail')->with('news', $news)->with('otherNews', $otherNews)->with('documentaries', $documentaries);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = port1090News::find($id);
        return view('edit1090news')->with('news', $news);
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
        $request->validate([
            'title' => 'required|max:1000',
            'shortContent' => 'required',
            'content' => 'nullable'
        ]);

        //if user doesn't upload an image, use noimage.png for the menu
        $imageName = "noimage.png";

        $news = port1090News::find($id);

        //if user upload image
        if ($request->image) {
            $request->validate([
                'image' => 'nullable|file|image|mimes:jpeg,png,jpg|max:5000'
            ]);
            if ($news->image != "noimage.png") {
                $imageName = $news->image;
                unlink(public_path('images') . '/' . $imageName);
            }
            $imageName = date('mdYHis') . uniqid() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
        }

        //save information to News table
        $news->title = $request->title;
        $news->shortContent = $request->shortContent;
        $news->content = $request->content;
        /* if user doesn't upload an image, but there's already an image in the DB
        -> user doesn't want to change the image -> no update for image, else: */
        if (!($news->image != "noimage.png" && $imageName == "noimage.png")) {
            $news->image = $imageName;
        }
        $news->save();

        $request->session()->flash('status', $request->title . ' is saved successfully');
        return redirect('port1090news');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = port1090News::find($id);
        if ($news->image != "NOFILE.pdf") {
            unlink(public_path('images') . '/' . $news->image);
        }

        $newsName = $news->title;
        $news->delete();

        Session()->flash('status', $newsName . ' is deleted successfully');
        return redirect('port1090news');
    }
}
