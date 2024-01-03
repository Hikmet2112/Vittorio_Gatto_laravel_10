<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticleCreateForm extends Component
{

    public $title;
    public $subtitle;
    public $body;

    protected $rules=[
        'title'=>'required|min:4',
        'subtitle'=>'required|min:4',
        'body'=>'required',
    ];

    protected $messages=[
        'title.required'=>"il titolo è obbligatorio",
        'title.min:4'=>"il titolo deve contenere almeno 4 caratteri",
        'subtitle.required'=>"il titolo è obbligatorio",
        'subtitle.min:4'=>"il sottotitolo deve contenere almeno 4 caratteri",
        'body.required'=>"il corpo del testo è obbligatorio",
        
    ];

    public function articleStore(){

        $this->validate();

        Article::create([
            'title'=>$this->title,
            'subtitle'=>$this->subtitle,
            'body'=>$this->body,
        ]);

        session()->flash('message', "l'articolo è stato creato");
        $this->clearForm();
    }


    protected function clearForm(){
        $this->title='';
        $this->subtitle='';
        $this->body='';
    }

    public function updated($propertyName){

        $this->validateOnly($propertyName);

    }

    public function render()
    {
        return view('livewire.article-create-form');
    }
}
