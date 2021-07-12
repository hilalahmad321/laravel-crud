<x-layouts>
    <x-slot name="title">Home</x-slot>
    <x-slot name="content">
        <div class="card m-4 py-2 px-3">
            <div class="d-flex justify-content-between">
                <div>
                    <h4>Student ( {{count($student)}} )</h4>
                </div>
                <div>
                    <a href="{{ route('add-student') }}" class="btn btn-primary">Add Student</a>
                </div>
            </div>
        </div>
        @if (session()->has("status"))
            <div class="alert alert-success" role="alert">
                <strong>{{session("status")}}</strong>
            </div>
        @endif
        <div class="table-responsive m-3">
            <table class="table table-bordered">
                <thead>
                    <tr class="bg-dark text-white">
                        <th>Id</th>
                        <th>Student Name</th>
                        <th>Student Age</th>
                        <th>Student City</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($student  as $std)
                    <tr>
                        <td scope="row">{{$std->id}}</td>
                        <td>{{$std->stdname}}</td>
                        <td>{{$std->stdage}}</td>
                        <td>{{$std->stdcity}}</td>
                        <td><a href="{{ url('edit_student',$std->id) }}" class="btn btn-primary">Edit</a></td>
                        <td><a href=" {{ url('delete_student', $std->id) }} " class="btn btn-danger">Delete</a></td>
                    </tr>
                    @empty
                        
                    @endforelse
                   
                </tbody>
            </table>
        </div>
    </x-slot>
</x-layouts>