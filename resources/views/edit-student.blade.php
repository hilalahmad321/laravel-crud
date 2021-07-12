<x-layouts>
    <x-slot name="title">Update Student</x-slot>
    <x-slot name="content">
        <div class="row">
            <div class="col-lg-6 col-md-8 col-sm-12 offset-lg-3 offset-md-2 offset-sm-0">
             <form action="" class="mt-5" method="POST">
                 @csrf
                 <div class="form-group">
                     <label for="">Enter Name</label>
                     <input type="text" name="stdname" id="" value=" {{$student->stdname}} " class="form-control">
                     <input type="hidden" name="id" id="" value=" {{$student->id}} " class="form-control">
                 </div>
                 <div class="form-group">
                     <label for="">Enter Age</label>
                     <input type="text" name="stdage" id="" value=" {{$student->stdage}} " class="form-control">
                 </div>
                 <div class="form-group">
                     <label for="">Enter City</label>
                     <input type="text" name="stdcity" value=" {{$student->stdcity}} " id="" class="form-control">
                 </div>
                 <div class="form-group">
                      <button type="submit" class="btn btn-primary">Update</button>
                 </div>
             </form>
            </div>
        </div>
    </x-slot>
</x-layouts>