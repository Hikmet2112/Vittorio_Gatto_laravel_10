<div>
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Because she competes with no one, no one can compete with her. --}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 d-flex justify-content-center">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <form class="rounded" wire:submit='articleStore'>
                                @csrf
                                <div class="mb-3">
                                <label for="title" class="form-label">Titolo</label>
                                <input wire:model='title' type="text" class="form-control" id="title">
                                
                                </div>
                                <div class="mb-3">
                                <label for="subtitle" class="form-label">Sottotitolo</label>
                                <input wire:model='subtitle' type="text" class="form-control" id="subtitle">
                                </div>
                                <div class="mb-3">
                                <label for="body" class="form-label">Corpo del messaggio</label>
                                <textarea wire:model='body' class="form-control" id="body"></textarea>
                                </div>
                                
                                <button type="submit" class="btn btn-primary">inserisci articolo</button>
                            </form>
                    </div>    
                </div>
            </div>
        </div>
    </div>
 


</div>
