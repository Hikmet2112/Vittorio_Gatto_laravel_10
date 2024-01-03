<div>
    {{-- In work, do what you enjoy. --}}
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">titolo</th>
            <th scope="col">sottotitolo</th>
            <th scope="col">body</th>
            <th scope="col">mostra articolo</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($articles as $article)
            <tr>
                <th scope="row">{{$article->id}}</th>
                <td>{{$article->title}}</td>
                <td>{{$article->subtitle}}</td>
                <td>{{$article->body}}</td>
                <td><a class="btn btn-success" href="{{route('article.show',compact('article'))}}">dettaglio</a></td>
            </tr>
        @endforeach
        </tbody>
      </table>
</div>
