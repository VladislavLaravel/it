@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Categories</div>
                <h1><a href="{{ route('company.index') }}" class="btn btn-secondary">Companies</a></h1>

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
                            @foreach($employers as $employer)
                            	<tr>
                            		<td>{{ $employer->name }}</td>
                                    <td>{{ $employer->description }}</td>
                                    <td>
                                    	@if($employer->image)
                            				<img src="{{asset('/storage/' . $employer->image)}}">
                            			@endif
                            		</td>
                                    <td><a href="{{ route('employer.edit', $employer->id) }}" class="btn btn-secondary">Update</a></td>
                            	</tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                    
                    <a href="{{ route('employer.create') }}" class="btn btn-secondary">Add employer</a>

                    @if(isset($message))
                        {{ $message }}
                    @endif
                </div>
                @else
                	<a href="{{ route('employer.create') }}" class="btn btn-secondary">Create your first employer</a>
                @endif
                
            </div>
        </div>
    </div>
</div>
@endsection
