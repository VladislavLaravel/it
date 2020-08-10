@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <form  action="{{route('employer.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="first_name" class="col-sm-2 col-form-label">First Name</label>
                        <div class="col-sm-10">
                           <input type="text" name="first_name" id="first_name">
                        </div>
                    </div>
                    @if ($errors->has("first_name"))<span>{{ $errors->first("first_name") }}</span>@endif

                    <div class="form-group row">
                        <label for="last_name" class="col-sm-2 col-form-label">Last Name</label>
                        <div class="col-sm-10">
                           <input type="text" name="last_name" id="last_name">
                        </div>
                    </div>

                    @if ($errors->has("last_name"))<span>{{ $errors->first("last_name") }}</span>@endif
                    
                    
                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                           <input type="email" name="email" id="email">
                        </div>
                    </div>

                    @if ($errors->has("email"))<span>{{ $errors->first("email") }}</span>@endif


                    <div class="form-group row">
                        <label for="phone" class="col-sm-2 col-form-label">phone</label>
                        <div class="col-sm-10">
                           <input type="text" name="phone" id="phone">
                        </div>
                    </div>

                     <div class="form-group row">
                        <label for="company" class="col-sm-2 col-form-label">company</label>
                        <select name="company_id" id="company" required>
                            @foreach($companies as $company)
                                <option value="{{$company->id}}"> {{$company->name }} </option>
                            @endforeach
                        </select>
                    </div>
                    @if ($errors->has("company_id"))<span>{{ $errors->first("company_id") }}</span>@endif

                    <button type="submit">Create</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
