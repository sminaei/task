<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
          Create Task
        </h2>
    </x-slot>
    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <form method="post" action="{{route('store-tasks')}}" enctype="multipart/form-data">
              @csrf
                <label  class="col-sm-2 col-form-label">name task</label>
                <input class="form-control" style="width: 50%" name="title" type="text">
                <label for="status">Select Status:</label>
                <select name="status" id="status">
                    <option value="done">Done</option>
                    <option value="incomplete">Incomplete</option>
                </select>
                <br>

                <label  class="col-sm-2 col-form-label">assign to</label>
                <select class="form-select" name="user_id" id="user_id" style="width: 20%">
                    @foreach($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                        @endforeach
                </select>
                <br>
            <button class="btn btn-primary" name="submit" type="submit">save</button>
            </form>
        </div>
    </div>
    </div>
</x-app-layout>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
