@extends('layout.master')
@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-4 mx-auto">
                @include('user.flashmesseges')
              <table class="table table-striped">
                <th>Assigned teachers to student {{$student->user->name}} are </th>
                @foreach($student->teachers as $key=> $teacher)
                <tr>
                    <td>
                        {{$teacher->teacherUser->name}}
                    </td>
                </tr>
                @endforeach
              </table>

            </div>
        </div>
    </div>

@endsection
