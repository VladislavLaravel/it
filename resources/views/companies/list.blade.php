@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Companies</div>
                @if(count($companies))
                    <h1><a href="{{ route('employer.index') }}" class="btn btn-secondary">Employers</a></h1>
                @endif

               	<div class="card-body">
                    

                     <table border="1" width="100%" cellpadding="5">
                        <thead >
                            <tr>
                                <th>Name</th>
                                <th>Desc</th>
                                <th>Image</th>
                                <th class="last-th-table-js" style="padding:0"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($companies as $company)
                            	<tr>
                            		<td>{{ $company->name }}</td>
                                    <td>{{ $company->description }}</td>
                                    <td>
                                    	@if($company->image)
                            				<img src="{{asset('/storage/' . $company->logo)}}">
                            			@endif
                            		</td>
                                    <td><a href="{{ route('company.edit', $company->id) }}" class="btn btn-secondary">Update</a></td>
                            	</tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                    
                    <a href="{{ route('company.create') }}" class="btn btn-secondary">Add company</a>

                    @if(isset($message))
                        {{ $message }}
                    @endif
                </div>
                 @if(count($companies))
                	<a href="{{ route('company.create') }}" class="btn btn-secondary">Create your first company</a>
                @endif
                
            </div>
        </div>
    </div>
</div>
@endsection
