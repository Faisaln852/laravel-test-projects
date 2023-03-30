@extends('layout.master')
@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-md-4 mx-auto">
            @include('user.flashmesseges')
            <div class=" mb-4">
               <form action="{{route('teacher.store') }}" method="post">
                @csrf

                <label for="">Add Teachers </label>
                <select class="students form-controll px-5" name="user_id[]"
                   multiple >
                    @foreach($users as $key => $user)
                    <option  value="{{$user->id}}"> {{$user->name}} </option>
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
            placeholder: 'Add Teachers ',
        });
      </script>

@endsection
