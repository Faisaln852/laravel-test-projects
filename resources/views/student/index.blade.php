@extends('layout.master')
@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-8 mx-auto">
                @include('user.flashmesseges')
                <div class="mb-3 d-flex justify-content-end">
                <a href="{{route('student.create')}}" class="btn btn-info">Add Student</a>
                </div>
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Student Name</th>
                        <th scope="col">Student Email</th>
                        <th>Edit</th>
                        <th>Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $key=> $student)
                      <tr>
                        <th scope="row">{{$key}}</th>
                        <td>{{$student->user->name}}</td>
                        <td>{{$student->user->email}}</td>
                        <td>
                            <form action="{{route('student.edit',$student->id)}}" method="post">
                                @csrf
                                @method('GET')
                                <button type="submit" class="btn btn-outline-success">Edit</button>
                            </form>
                        </td>
                        <td>
                            <form action="{{route('student.destroy',$student->id)}}" method="post">
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
