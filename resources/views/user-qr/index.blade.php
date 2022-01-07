@extends('layouts.app')

@section('template_title')
    User Qr
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
        @include('layouts.sidebar')
            <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('User Qr') }}
                            </span>

                             <div class="float-right">
                                 @can('user-qrs.create')
                                <a href="{{ route('user-qrs.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                                 @endcan

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
                                        
										<th>Url Qr</th>
										<th>Content</th>
										<th>Tags</th>
										<th>Category Type Id</th>
										<th>Owner User Id</th>
										<th>Date Create</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($userQrs as $userQr)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $userQr->url_qr }}</td>
											<td>{{ $userQr->content }}</td>
											<td>{{ $userQr->tags }}</td>
											<td>{{ $userQr->category_type_id }}</td>
											<td>{{ $userQr->owner_user_id }}</td>
											<td>{{ $userQr->date_create }}</td>

                                            <td>
                                                @can('user-qrs.destroy')
                                                <form action="{{ route('user-qrs.destroy',$userQr->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('user-qrs.show',$userQr->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('user-qrs.edit',$userQr->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                                @endcan

                                                @can('user-qrs.update')

                                                    <a class="btn btn-sm btn-primary " href="{{ route('user-qrs.show',$userQr->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('user-qrs.edit',$userQr->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>

                                                @endcan

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $userQrs->links() !!}
            </div>
        </div>
    </div>
@endsection
