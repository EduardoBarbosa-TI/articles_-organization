<x-layout>
  
</x-layout>
<div class="container">
  <div class="row">
    <div class="col-12 col-md-12">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Autor</th>
            <th scope="col">Titulo</th>
            <th scope="col">Texto</th>
          </tr>
        </thead>
       
        @foreach ( $articles as $article)
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>{{ $article->autor }}</td>
            <td>{{ $article->titulo }}</td>
            <td>{{ $article->texto }}</td>
          </tr>
        </tbody>
        @endforeach
      </table> 
    </div>
  </div>
</div>

