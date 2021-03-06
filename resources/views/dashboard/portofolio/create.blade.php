@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create New Portofolio</h1>
</div>

<div class="col-lg-8">
    <form method="post" action="/dashboard/portofolio" class="mb-5" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required autofocus value="{{ old('title') }}">
            @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Portofolio Image</label>
            <img class="img-preview img-fluid mb-3 col-sm-5">
            <input class="form-control  @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
            @error('image')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <select class="form-select" name="category">
                <option value="freelance">Freelance Job</option>
                <option value="main" selected>Main Job</option>
                <option value="self">Self Employed</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            @error('description')
              <p class="text-danger">{{ $message }}</p>
            @enderror
            <textarea id="description" class="form-control" value="description" id="description" rows="3" name="description" required="required" value="{{ old('description') }}"></textarea>
        </div>

        <div class="mb-3">
            <label for="url" class="form-label">Url</label>
            <input type="text" class="form-control @error('url') is-invalid @enderror" id="url" name="url" required autofocus value="{{ old('url') }}">
            @error('url')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select class="form-select" name="status">
                <option value="active" selected>Active</option>
                <option value="inactive">Inactive</option>
            </select>
        </div>
       
        <button onclick="goBack()" class="btn btn-secondary">Back to My Portofolio</a></button>
        <button type="submit" class="btn btn-primary">Create Portofolio</button>

    </form>
</div>

@endsection