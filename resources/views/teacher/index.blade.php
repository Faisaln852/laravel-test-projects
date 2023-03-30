@extends('layout.master')
@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-8 mx-auto">
                @include('user.flashmesseges')
                <div class="mb-3 d-flex justify-content-end">
                <a href="{{route('teacher.create')}}" class="btn btn-info">Add Teacher</a>
                </div>
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Teacher Name</th>
                        <th scope="col">Teacher Email</th>
                        <th>Edit</th>
                        <th>Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($teachers as $key=> $teacher)
                      <tr>
                        <th scope="row">{{$key}}</th>
                        <td>{{$teacher->user->name}}</td>
                        <td>{{$teacher->user->email}}</td>
                        <td>
                            <form action="{{route('teacher.edit',$teacher->id)}}" method="post">
                                @csrf
                                @method('GET')
                                <button type="submit" class="btn btn-outline-success">Edit</button>
                            </form>
                        </td>
                        <td>
                            <form action="{{route('teacher.destroy',$teacher->id)}}" method="post">
                                @csrf
                                @method('Delete')
                                <button type="submit" class="btn btn-outline-danger">Delete</button>
                            </form>
                        </td>
                      </tr>
                      @endforeach

                    </tbody>
                  </table>
            </div>
        </div>
    @endsection
    @section('scripts')
        <script>
            $(".students").select2({
                maximumSelectionLength: 10,
                placeholder: 'Add Teachers ',
            });
        </script>
    @endsection
