@extends('admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
               	<div class="card-body">
                    <table border="1" width="100%" cellpadding="5" class="table">
                        <thead >
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Logo</th>
                                <th>website</th>
                                <th class="last-th-table-js" style="padding:0"></th>
                                <th class="last-th-table-js" style="padding:0"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($companies as $company)
                            	<tr>
                            		<td>{{ $company->name }}</td>
                                    <td>{{ $company->email }}</td>
                                    <td>
                                    	@if($company->logo)
                            				<img src="{{asset('/storage/' . $company->logo)}}">
                            			@endif
                            		</td>
                                    <td>{{ $company->website }}</td>
                                    <td><a href="{{ route('company.edit',  $company->id) }}" class="btn btn-secondary">Update</a></td>
                                    <td>
                                        <form action="{{route('company.destroy', $company->id) }}" method="post">
                                            @method('DELETE')
                                            @csrf
                                            <input type="submit" value="Delete" name="" class="btn btn-secondary">
                                        </form>
                                    </td>
                            	</tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                    <a href="{{ route('company.create') }}" class="btn btn-secondary">Add company</a>

                    @if(isset($message))
                        {{ $message }}
                    @endif
                </div>
                 @if(count($companies) == 0)
                	<a href="{{ route('company.create') }}" class="btn btn-secondary">Create your first company</a>
                @endif
                
            </div>
        </div>
    </div>
</div>
@endsection
