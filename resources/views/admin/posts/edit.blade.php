@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                {{-- Title card --}}
                <div class="card">
                    <div class="card-header">Modifica Post {{$post->id}}</div>

                    {{-- / Title card --}}
                    <div class="card-body">
                        <form action="{{ route('admin.posts.update', $post) }}" method="POST">
                            {{-- Token --}}
                            @csrf
                           @method('PUT')
                            <div class="form-group">
                                <label for="title">Titolo:</label>
                                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror "
                                    placeholder="Inserisci titolo" value="{{old('title', $post->title)}}">
                                @error('title')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            {{-- / title post --}}

                            {{-- / SLUG --}}
                            <div class="form-group">
                                <label for="content">Slug</label>
                                <textarea type="text" class="form-control" disabled
                                     value="{{old('title', $post->slug)}}">
                                </textarea>
                                   
                            </div>
                            {{-- content post --}}
                            <div class="form-group">
                                <label for="content">Contenuto</label>
                                <textarea type="text" name="content" class="form-control @error('content') is-invalid @enderror"
                                    placeholder="Post's content" value="{{old('title', $post->content)}}">

                                </textarea>
                                    @error('content')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                            </div>
                            {{-- / content post --}}

                            <div class="form-group">
                                <input type="submit" class="btn btn-info white" value="Create Post">
                            </div>
                        </form>
                    </div>
                </div>
                <a href="{{ route('admin.posts.index') }}" class="btn btn-success"> Back</a>

            </div>
        </div>
    </div>
@endsection