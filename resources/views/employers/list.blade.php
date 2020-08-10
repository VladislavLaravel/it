@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Categories</div>
                <h1><a href="{{ route('company.index') }}" class="btn btn-secondary">Companies</a></h1>

               	<div class="card-body">
                    

                     <table border="1" width="100%" cellpadding="5" class="table">
                        <thead >
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Company</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th class="last-th-table-js" style="padding:0"></th>
                                <th class="last-th-table-js" style="padding:0"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($employers as $employer)
                            	<tr>
                            		<td>{{ $employer->first_name }}</td>
                                    <td>{{ $employer->last_name }}</td>
                                    <td>{{ $employer->company->name }}</td>
                                    <td>{{ $employer->email }}</td>
                                    <td>{{ $employer->phone }}</td>
                                    <td><a href="{{ route('employer.edit', $employer->id) }}" class="btn btn-secondary">Update</a></td>
                                    <td>
                                        <form action="{{route('employer.destroy', $employer->id) }}" method="post">
                                            @method('DELETE')
                                            @csrf
                                            <input type="submit" value="Delete" name="" class="btn btn-secondary">
                                        </form>
                                    </td>
                            	</tr>
                            @endforeach


                        </tbody>
                    </table>
                    
                    <a href="{{ route('employer.create') }}" class="btn btn-secondary">Add employer</a>

                    @if(isset($message))
                        {{ $message }}
                    @endif
                </div>
                @if(count($employers))
                	<a href="{{ route('employer.create') }}" class="btn btn-secondary">Create your first employer</a>
                @endif
                
            </div>
        </div>
    </div>
</div>

@endsection


