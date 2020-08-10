@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Company</div>

                <form  action="{{route('company.update', $company->id)}}" method="POST" enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                           <input type="text" name="name" id="name" value="{{ $company->name }}">
                        </div>
                    </div>
                    @if ($errors->has("name"))<span>{{ $errors->first("name") }}</span>@endif
                    
                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">email</label>
                        <div class="col-sm-10">
                          <input type="text" id="email" name="email" value="{{ $company->email }}">
                        </div>
                    </div>

                    @if ($errors->has("email"))<span>{{ $errors->first("email") }}</span>@endif
                    
                    <div class="form-group row">
                        <label for="image" class="col-sm-2 col-form-label">Image</label>
                        @if($company->logo)
                                <img src="{{asset('/storage/' . $company->logo)}}">
                        @endif
                        <div class="col-sm-4">
                           <input type="file" name="image" id="image" value="">
                        </div>
                    </div>

                     <div class="form-group row">
                        <label for="website" class="col-sm-2 col-form-label">Website</label>
                        <div class="col-sm-10">
                           <input type="website" name="name" id="website" value="{{ $company->website }}">>
                        </div>
                    </div>

                    <button type="submit">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
