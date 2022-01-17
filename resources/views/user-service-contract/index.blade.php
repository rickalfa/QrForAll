@extends('layouts.app')

@section('template_title')
    User Service Contract
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('User Service Contract') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('user-service-contracts.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Name Service</th>
										<th>User Id</th>
										<th>Start Service Contract</th>
										<th>Expire Service Contract</th>
										<th>Description</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($userServiceContracts as $userServiceContract)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $userServiceContract->name_service }}</td>
											<td>{{ $userServiceContract->user_id }}</td>
											<td>{{ $userServiceContract->start_service_contract }}</td>
											<td>{{ $userServiceContract->expire_service_contract }}</td>
											<td>{{ $userServiceContract->description }}</td>

                                            <td>
                                                <form action="{{ route('user-service-contracts.destroy',$userServiceContract->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('user-service-contracts.show',$userServiceContract->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('user-service-contracts.edit',$userServiceContract->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $userServiceContracts->links() !!}
            </div>
        </div>
    </div>
@endsection
