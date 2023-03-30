@extends('layout.master')
@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-4 mx-auto">
                @include('user.flashmesseges')
                <table class="table table-striped">
                    <th>Assigned Students to teacher {{ $teacher->user->name }} are </th>
                    @foreach ($teacher->students as $key => $student)
                        <tr>
                            <td>
                                {{ $student }}
                            </td>
                        </tr>
                    @endforeach
                </table>

            </div>
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
