<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
class BookController extends Controller
{
    public function index(){
        $datas = Book::all();
        return view('pages.book', compact('datas'));
    }


    public function create(){
        return view('pages.newBook');
    }

    public function store(Book $id,Request $rq){
        request()->validate([
            "nom"=>["required","min:1","max:40"],
            "texte_auteur"=>["required","min:1","max:40"],
            "note"=>["required","numeric","between:1,5"]
        ]);
        $newEntry = $id;
        $newEntry->nom = $rq->nom;
        $newEntry->texte_auteur = $rq->texte_auteur;
        $newEntry->note = $rq->note;

        $newEntry->save();

        return redirect()->back();
    }


    public function show(Book $id){
        $book = $id;

        return view('layouts.showBook',compact('book'));
    }


    public function edit(Book $id){
        $book = $id;

        return view('layouts.editBook',compact('book'));
    }

    public function update(Book $id,Request $rq){
        request()->validate([
            "nom"=>["required","min:1","max:40"],
            "texte_auteur"=>["required","min:1","max:40"],
            "note"=>["required","numeric"]
        ]);
        $newEntry = $id;
        $newEntry->nom = $rq->nom;
        $newEntry->texte_auteur = $rq->texte_auteur;
        $newEntry->note = $rq->note;

        $newEntry->save();

        return redirect(route('show',$newEntry->id));
    }
    public function destroy(Book $id){
        $id->delete();

        return redirect(route('book'));
    }


    public function destroyAll(){
        Book::truncate();

        return redirect()->back();
    }
}
