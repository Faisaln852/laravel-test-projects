@extends('layout.master')
@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="d-block">
                @include('user.flashmesseges')
                <form action="{{ route('student.update', $student->user->id) }}" method="post">
                    @csrf
                    @method('put')
                    <div class=" mb-3">
                        <label for="" class="mb-2">Student Name</label>
                        <input type="text" class="form-control" name="name" value="{{ $student->user->name }}">
                    </div>
                    <div class=" mb-4">
                        <label for="" class="mb-2">Student email</label>
                        <input type="text" class="form-control" value={{ $student->user->email }} readonly>
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
        $(".tea").select2({
            maximumSelectionLength: 10,
            placeholder: 'Add Teachers ',
        });
    </script>
@endsection
