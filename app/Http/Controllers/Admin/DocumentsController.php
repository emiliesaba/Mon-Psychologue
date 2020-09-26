<?php

namespace App\Http\Controllers\Admin;
use App\Auteur;
use App\Document;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DocumentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){

        $this->middleware('auth');
    }
    public function index()
    {
      $documents=Document::all();
      $user=User::all();
      $user=Auteur::all();
      return view('admin.documents.index',compact('documents','users','auteurs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $documents=Document::all();
        $user=User::all();
        $acteur=Auteur::all();
        return view('admin.documents.create',compact('documents','users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        //  request()->validate([
        //     'titre'=> ['required','string'],
        //     'image'=> ['required','image'],
        //     'prix'=> ['required','string'],
        //     'lien'=> ['required','string'],
           
        //   ]);
        //   $imagePath=request('image')->store('uploads','public');
          Document::create([
              'titre'=>$request[ 'titre'],
            //   'image'=>$imagePath,
              'prix'=>$request[ 'prix'],
              'lien'=>$request[ 'lien']
              ]);      
             
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function show(Document $document)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function edit(Document $document)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Document $document)
    {
      //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function destroy(Document $document)
    {
        //
    }
}
