<?php

namespace App\Livewire;

use Livewire\Component;

class ArticleTableIndex extends Component
{
    public $articles;
    public function render()
    {
        return view('livewire.article-table-index');
    }
}
