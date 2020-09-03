@extends('layouts.app')



@section('content')
    <div class="block" style="padding-top: 20vh">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-right">
                    <a class="btn btn-danger" href="{{ route('panel') }}"> Back to panel</a>
                </div>
            </div>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Role</th>
                <th>Image</th>
                <th>Email</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->permission }}</td>
                    <td>
                        @if(isset($user->image))
                            <img style="width: 200px" src="{{ asset('/storage/images/'.$user->image) }}"></td>
                    @else
                        NONE
                    @endif

                    <td>{{ $user->email }}</td>
                    <td>
                        <form action="{{ route('users.destroy',$user->id) }}" method="POST">
                            <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a>
                            <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>

                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>

        <div class="pagination-nav">
            {!! $users->links() !!}
        </div>
    </div>
@endsection
