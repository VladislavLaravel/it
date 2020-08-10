@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <form  action="{{route('company.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                           <input type="text" name="name" id="name">
                        </div>
                    </div>
                    @if ($errors->has("name"))<span>{{ $errors->first("name") }}</span>@endif

                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                           <input type="email" name="email" id="email">
                        </div>
                    </div>

                    @if ($errors->has("email"))<span>{{ $errors->first("email") }}</span>@endif
                    
                    <div class="form-group row">
                        <label for="logo" class="col-sm-2 col-form-label">Image</label>
                        <div class="col-sm-10">
                           <input type="file" name="logo" id="logo">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="website" class="col-sm-2 col-form-label">Website</label>
                        <div class="col-sm-10">
                           <input type="website" name="website" id="website">
                        </div>
                    </div>

                    <button type="submit">Create</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
