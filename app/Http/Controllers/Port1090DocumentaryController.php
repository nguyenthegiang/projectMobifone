<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\documentary;
use App\Models\port1090News;

class Port1090DocumentaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $documentaries = documentary::paginate(5);
        return view('documentary')->with('documentaries', $documentaries);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $newses = port1090News::all();
        return view('createDocumentary')->with('newses', $newses);
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
            'code' => 'required|unique:documentaries|max:1000',
            'title' => 'required',
            'applyTime' => 'required',
            'content' => 'required',
            'region' => 'required'
        ]);

        //if user doesn't upload an file, use NOFILE.pdf
        $fileLink = "NOFILE.pdf";

        //if user upload file
        if ($request->fileLink) {
            $request->validate([
                'fileLink' => 'nullable|file|mimes:pdf|max:5000'
            ]);
            $fileLink = date('mdYHis') . uniqid() . '.' . $request->fileLink->extension();
            $request->fileLink->move(public_path('files'), $fileLink);
        }

        //save information to table
        $doc = new documentary();
        $doc->code = $request->code;
        $doc->title = $request->title;
        $doc->applyTime = $request->applyTime;
        $doc->content = $request->content;
        $doc->region = $request->region;
        $doc->port1090_news_id = $request->newsId;
        $doc->fileLink = $fileLink;
        $doc->save();

        $request->session()->flash('status', $request->code . ' is saved successfully');
        return redirect('port1090documentary');
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
        $documentary = documentary::find($id);
        $newses = port1090News::all();
        return view('editDocumentary')->with('documentary', $documentary)->with('newses', $newses);
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
            'code' => 'required|max:1000',
            'title' => 'required',
            'applyTime' => 'required',
            'content' => 'required',
            'region' => 'required',
        ]);

        //if user doesn't upload an file, use NOFILE.pdf
        $fileLink = "NOFILE.pdf";

        $doc = documentary::find($id);

        //if user upload file
        if ($request->fileLink) {
            $request->validate([
                'fileLink' => 'nullable|file|mimes:pdf|max:5000'
            ]);
            if ($doc->fileLink != "noimage.png") {
                $fileLink = $doc->fileLink;
                unlink(public_path('files') . '/' . $fileLink);
            }
            $fileLink = date('mdYHis') . uniqid() . '.' . $request->fileLink->extension();
            $request->fileLink->move(public_path('files'), $fileLink);
        }

        //save information to table
        $doc->code = $request->code;
        $doc->title = $request->title;
        $doc->applyTime = $request->applyTime;
        $doc->content = $request->content;
        $doc->region = $request->region;
        $doc->port1090_news_id = $request->newsId;
        /* if user doesn't upload an file, but there's already an file in the DB
        -> user doesn't want to change the file -> no update for file, else: */
        if (!($doc->fileLink != "NOFILE.pdf" && $fileLink == "NOFILE.pdf")) {
            $doc->fileLink = $fileLink;
        }
        $doc->save();

        $request->session()->flash('status', $request->code . ' is saved successfully');
        return redirect('port1090documentary');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $documentary = documentary::find($id);

        $docCode = $documentary->code;
        $documentary->delete();

        Session()->flash('status', $docCode . ' is deleted successfully');
        return redirect('port1090documentary');
    }
}
