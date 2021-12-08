@extends('layouts.app')

@section('template_title')
    User App
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('User App') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('user-app.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Name</th>
										<th>Email</th>
										<th>Country</th>
										<th>Address</th>
										<th>City</th>
										<th>Date Create</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($userApps as $userApp)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $userApp->name }}</td>
											<td>{{ $userApp->email }}</td>
											<td>{{ $userApp->country }}</td>
											<td>{{ $userApp->address }}</td>
											<td>{{ $userApp->city }}</td>
											<td>{{ $userApp->date_create }}</td>

                                            <td>
                                                <form action="{{ route('user-app.destroy',$userApp->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('user-app.show',$userApp->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('user-app.edit',$userApp->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $userApps->links() !!}
            </div>
        </div>
    </div>
@endsection
