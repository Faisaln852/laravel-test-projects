@extends('layout.master')
@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-md-4 mx-auto">
            @include('user.flashmesseges')

            <form action="{{route('teacher.update',$teacher->user->id) }}" method="post">
                @csrf
                @method('put')
            <div class=" mb-3">
                <label for="" class="mb-2">Teacher Name</label>
            <input type="text" class="form-control" name="name" value="{{$teacher->user->name}}">
            </div>
            <div class=" mb-4">
                <label for="" class="mb-2">Teacher email</label>
              <input type="text" class="form-control" value={{$teacher->user->email}} readonly>
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
