@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create new Post</h1>
    </div>  
    <div>
        <form method="post" action="/dashboard/post">
            @csrf
            
            <label for="judul">judul</label>
            <input type="text" name="judul" id="judul">

            <label for="slug">Slug</label>
            <input type="text" name="slug" id="slug" disabled readonly>

            <div>
                <label for="kategory">Kategori</label>
                <select name="kategori_id" id="kategori_id">
                    @foreach ($kategori as $kt)
                    <option value="{{ $kt->id }}">{{ $kt->nama }}</option>
                @endforeach
                </select>
            </div>
                

            <label for="kutipan">Kutipan</label>
            <input type="text" name="kutipan" id="kutipan">
            <br>
            <label for="Body">Body</label>
                <input id="body" type="hidden" name="content">
                <trix-editor input="body"></trix-editor>
        </form>
    </div>

    <script>
        const judul = document.querySelector('#judul');
        const slug = document.querySelector('#slug');

        judul.addEventListener('change', function(){
            fetch('/dashboard/posts/checkSlug?judul=' + judul.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
        });
    </script>
@endsection