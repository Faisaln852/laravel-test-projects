@extends('layout.master')
@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-4 mx-auto">
                @include('user.flashmesseges')
                <div class=" mb-4">
                   <form action="{{route('view.student.teachers') }}" method="post">
                    @csrf


                    <label for="">Select students to see there teachers </label>
                    <select class="students form-controll px-5" name="student_id"
                        >
                        @foreach($students as $key => $student)
                        <option  value="{{$student->id}}"> {{$student->user->name}} </option>
                        @endforeach
                    </select>
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
