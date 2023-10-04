<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comic as Comic;


class ComicProductController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics= Comic::all();
        return view("admin.adminManagement",compact("comics"));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.create", ["comic"=>new Comic()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data= $request->validate(
            [
                "title" => "required|min:2|max:50",
                "description"=>"required|min:10",
                "thumb"=>"required|URL",
                "price"=>"required|numeric|decimal:2|max:999.99",
                "series"=>"required|min:2|max:50",
                "sale_date"=>"required|date_format:Y-m-d",
                "type"=>"required|min:2|max:30"
            ],
            [
                "title.required" => "Title è un campo obbligatorio",
                "title.min" => "Title richide almeno 2 caratteri",
                "title.max" => "Title può avere un massimo di 50 caratteri",
                "description.required" => "Descrition è un campo obbligatorio",
                "description.min" => "Descrition  richide almeno 10 caratteri",
                "thumb.required" => "Thumb è un campo obbligatorio",
                "thumb.URL" => "Thumb deve contenere un URL valido",
                "price.required" => "Price è un campo obbligatorio",
                "price.numeric" => "Price deve conterenere solo numeri",
                "price.decimal" => "Price può contenere solo due numeri decimali",
                "price.max" => "Price può avere solo 3 numeri prima dei centesimi",
                "series.required" => "Series è un campo obbligatorio",
                "series.required" => "Series richide almeno 2 caratteri",
                "series.required" => "Series può avere un massimo di 50 caratteri",
                "sale_date.required" => "Sale date è un campo obbligatorio",
                "sale_date.date_format" => "Sale date il formato della data deve essere YYYY/mm/dd",
                "type.required" => "Type date è un campo obbligatorio",
                "type.min" => "Type richide almeno 2 caratteri",
                "type.max" => "Type può avere un massimo di 30 caratteri",
            ]
        );


        $newComic = new Comic();
        $newComic->fill($data);
        $newComic->save();

        return redirect()->route('admin.comic.show', $newComic->id);
    
    }

    /**
     * Display the specified resource.
     *
     * @param  Comic $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        
        return view("info",compact("comic"));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Comic $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view("admin.edit", compact("comic"));
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
        $data= $request->validate(
            [
                "title" => "required|min:2|max:50",
                "description"=>"required|min:10",
                "thumb"=>"required|URL",
                "price"=>"required|numeric|decimal:2|max:999.99",
                "series"=>"required|min:2|max:50",
                "sale_date"=>"required|date_format:Y-m-d",
                "type"=>"required|min:2|max:30"
            ],
            [
                "title.required" => "Title è un campo obbligatorio",
                "title.min" => "Title richide almeno 2 caratteri",
                "title.max" => "Title può avere un massimo di 50 caratteri",
                "description.required" => "Descrition è un campo obbligatorio",
                "description.min" => "Descrition  richide almeno 10 caratteri",
                "thumb.required" => "Thumb è un campo obbligatorio",
                "thumb.URL" => "Thumb deve contenere un URL valido",
                "price.required" => "Price è un campo obbligatorio",
                "price.numeric" => "Price deve conterenere solo numeri",
                "price.decimal" => "Price può contenere solo due numeri decimali",
                "price.max" => "Price può avere solo 3 numeri prima dei centesimi",
                "series.required" => "Series è un campo obbligatorio",
                "series.required" => "Series richide almeno 2 caratteri",
                "series.required" => "Series può avere un massimo di 50 caratteri",
                "sale_date.required" => "Sale date è un campo obbligatorio",
                "sale_date.date_format" => "Sale date il formato della data deve essere YYYY/mm/dd",
                "type.required" => "Type date è un campo obbligatorio",
                "type.min" => "Type richide almeno 2 caratteri",
                "type.max" => "Type può avere un massimo di 30 caratteri",
            ]
        );
        $comic->update($data);

        return redirect()->route("admin.comic.show", $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Comic $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('admin.comic.index')->with('message', "$comic->title è stato cancellato")->with('alert-type', "danger");

    }
}