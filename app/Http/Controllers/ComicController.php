<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Comic::all();

        return response()->view('comics.index', ['rows' => $rows]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()->view('comics.create', []);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
            'title' => 'required|max:20|unique:comics'
            ],
            [
            'title.required' => 'Il campo "Title" deve essere necessariamente riempito',
            'title.max' => 'Bisogna scegliere un titolo composto da non più di 20 caratteri',
            'title.unique' => "Non può essere scelto un titolo già assegnato ad un'altra rivista"
            ]
        );

        $form_data = $request->all();

        $newComic = new Comic();

        $newComic->fill($form_data);

        $newComic->save();

        return redirect()->route('comics.index')->with('success', 'Adesso hai un nuovo fumetto nella tua collezione');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        $row = $comic;

        return response()->view('comics.show', ['row' => $row]);


        // dd($comic);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        $row = $comic;

        return response()->view('comics.edit', ['row' => $row]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $request->validate(
            [
            'title' => 'required|max:20|unique:comics'
            ],
            [
            'title.required' => 'Il campo "Title" deve essere necessariamente riempito',
            'title.max' => 'Bisogna scegliere un titolo composto da non più di 20 caratteri',
            'title.unique' => "Non può essere scelto un titolo già assegnato ad un'altra rivista"
            ]
        );

        $comic->update($request->all());

        return redirect()->route('comics.show', ['comic' => $comic->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');

    }
}
