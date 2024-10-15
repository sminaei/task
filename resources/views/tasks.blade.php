<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Tasks
        </h2>
    </x-slot>
    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="text-center" style="font-size: 20px;color: #4b5563;font-weight: bold;">Tasks</div>
            <div style="direction: rtl" class="navbar navbar-expand-lg bg-light p-2">
                <a class="btn btn-primary" href="{{ route('create-tasks')}}">add task</a>

            </div>
              <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <table class="table">
                    <thead>
                    <tr>

                        <th scope="col">title</th>
                        <th scope="col">status</th>
                        <th scope="col">assign To</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($tasks as $task)
                    <tr>

                        <td>{{$task->title}}</td>
                        <td>{{$task->status}}</td>
                        <td>{{$task->user->name}}</td>

                    </tr>
                    @endforeach

                    </tbody>
                </table>

            </div>
        </div>
    </div>




</x-app-layout>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
