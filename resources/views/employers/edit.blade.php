@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <form  action="{{route('employer.update', $employer->id)}}" method="POST" enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <div class="form-group row">
                        <label for="first_name" class="col-sm-2 col-form-label">First Name</label>
                        <div class="col-sm-10">
                           <input type="text" name="first_name" id="first_name" value="{{ $employer->name }}">
                        </div>
                    </div>
                    @if ($errors->has("first_name"))<span>{{ $errors->first("first_name") }}</span>@endif

                    <div class="form-group row">
                        <label for="last_name" class="col-sm-2 col-form-label">Last Name</label>
                        <div class="col-sm-10">
                           <input type="text" name="last_name" id="last_name" value="{{ $employer->name }}">
                        </div>
                    </div>

                    @if ($errors->has("last_name"))<span>{{ $errors->first("last_name") }}</span>@endif
                    
                    
                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                           <input type="email" name="name" id="email" value="{{ $employer->name }}">
                        </div>
                    </div>

                    @if ($errors->has("email"))<span>{{ $errors->first("email") }}</span>@endif


                    <div class="form-group row">
                        <label for="phone" class="col-sm-2 col-form-label">phone</label>
                        <div class="col-sm-10">
                           <input type="text" name="name" id="phone" value="{{ $employer->name }}">
                        </div>
                    </div>

                     <div class="form-group row">
                        <label for="company" class="col-sm-2 col-form-label">company</label>
                        <select name="company" id="company" required>
                            @foreach($companies as $company)

                                @if($employer->company_id == $company->id)
                                    <option value="{{$company->id}}" selected> {{$company->name }} </option>
                                @else
                                    <option value="{{$company->id}}"> {{$company->name }} </option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    @if ($errors->has("company"))<span>{{ $errors->first("company") }}</span>@endif


                    <button type="submit">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
