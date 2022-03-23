<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;
use Illuminate\Validation\Rule;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();

        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $comic = new Comic;
        return view('comics.create', compact('comic'));
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
            'title' => ['required', 'string', 'unique:comics', 'min:3'],
            'thumb' => ['string', 'min:5'],
            'price' => ['required', 'numeric'],
            'series' => ['required', 'string', 'min:3'],
            'sale_date' => ['required', 'min:5'],
            'type' => ['required', 'string', 'min:5']
        ]);
        //Prendo i dati da $request che prende i dati dal form che gli viene mandato in POST 
        //e li salvo in una variabile
        $data = $request->all();

        //Istanzio il nuovo comic che voglio creare con i dati del form
        $comic = new Comic();

        $comic->fill($data);
        $comic->save();

        //Dopo aver fillato e salvato il nuovo fumetto nel DB reindirizzo l'utente all'index
        return redirect()->route('comics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $c = Comic::findOrFail($id);

        return view('comics.show', compact('c'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  App\Models\Comic $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Comic $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $request->validate([
            'title' => ['required', 'string', Rule::unique('comics')->ignore($comic->id), 'min:3'],
            'thumb' => ['string', 'min:5'],
            'price' => ['required', 'numeric'],
            'series' => ['required', 'string', 'min:3'],
            'sale_date' => ['required', 'min:5'],
            'type' => ['required', 'string', 'min:5']
        ]);

        $data = $request->all();


        $comic->update($data);
        $comic->save();

        return redirect()->route('comics.show', compact('comic'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  App\Models\Comic $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index');
    }
}
