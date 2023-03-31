@extends('layout.master')
@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-8 mx-auto mb-3">
                <h3 class="mb-3">Assigned Students to teacher are {{ $teacher->user->name }}  </h3>
                @include('user.flashmesseges')
                <table class="table table-striped">
                    <th>data from student table</th>
                    @foreach ($teacher->students as $key => $student)
                        <tr>
                            <td>
                                {{$student->user_id}}
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
            {{-- <div class="col-md-8 mx-auto">

                @include('user.flashmesseges')
                <table class="table table-striped">
                    <th>data from user table</th>
                    @foreach ($teacher->studentUser as $key => $user)
                        <tr>
                            <td>
                                {{$user->name}}
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div> --}}
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(".students").select2({
            maximumSelectionLength: 10,
            placeholder: 'Select Servie Categories ',
        });
    </script>
@endsection
