@extends('layout.master')
@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="d-flex justify-content-center mb-3">
                <h3>Assign Students to Teacher</h3>

            </div>
            @include('user.flashmesseges')
            <div class="mb-4">
                <form action="{{ route('assign.students') }}" method="post">
                    @csrf

                    <div class="mb-3">
                        <label for="">All Teachers </label>
                        <select class="students form-controll px-5" name="teacher_id">
                            @foreach ($teachers as $key => $teacher)
                                <option value="{{ $teacher->id }}"> {{ $teacher->user->name }} </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="">Add Students </label>
                        <select class="students form-controll px-5" name="student_id[]" multiple>
                            @foreach ($students as $key => $student)
                                <option value="{{$student->id }}"> {{ $student->user->name }} </option>
                            @endforeach
                        </select>
                    </div>
            </div>
            <div class="d-flex justify-content-center">
                <button class="btn btn-success">submit</button>
            </div>
            </form>

        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
    $(".students").select2({
        maximumSelectionLength: 10,
        placeholder: 'Select Students ',
    });
</script>
@endsection
