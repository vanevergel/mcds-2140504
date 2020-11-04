@extends('layouts.app')
 
@section('title', 'Crear Categoría')
 
@section('content')
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h1>
                <i class="fa fa-plus"></i> 
                Adicionar Categorías
            </h1>
            <hr>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ url('home') }}">
                        <i class="fa fa-clipboard-list"></i>  
                        Escritorio
                    </a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ route('categories.index') }}">
                        <i class="fa fa-categories"></i>  
                         Módulo Categorías
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <i class="fa fa-plus"></i> 
                    Adicionar Categorías
                </li>
              </ol>
            </nav>
 
            <form method="POST" action="{{ route('categories.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="@lang('general.label-name')" autofocus>
 
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
 
                        <div class="form-group">
                                <div class="text-center my-3">
                                    <img src="{{ asset('imgs/no-image.png') }}" class="img-thumbnail" id="preview" width="120px">
                                </div>
                                <div class="custom-file">
                                   <input type="file" class="custom-file-input @error('image') is-invalid @enderror" id="image" name="image" accept="image/*">
                                   <label class="custom-file-label" for="customFile"> 
                                     <i class="fa fa-upload"></i> 
                                     Foto
                                   </label>
                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>    
                        </div>
 
                        <div class="form-group">
                                <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" placeholder="@lang('general.label-description')" autofocus>
 
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
 
                        <div class="form-group">
                                <button type="submit" class="btn btn-larapp btn-block text-uppercase">
                                    Adicionar
                                    <i class="fa fa-save"></i> 
                                </button>
                        </div>
                    </form>
        </div>
    </div>
@endsection
