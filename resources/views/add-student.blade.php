<x-layouts>
    <x-slot name="title">add-student</x-slot>
    <x-slot name="content">
       <div class="row">
           <div class="col-lg-6 col-md-8 col-sm-12 offset-lg-3 offset-md-2 offset-sm-0">
            <form action="" method="POST" class="mt-5">
                @csrf
                <div class="form-group">
                    <label for="">Enter Name</label>
                    <input type="text" name="stdname" id="" class="form-control">
                    @error('stdname')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Enter Age</label>
                    <input type="text" name="stdage" id="" class="form-control">
                    @error('stdage')
                    <span class="text-danger">{{$message}}</span>
                @enderror
                </div>
                <div class="form-group">
                    <label for="">Enter City</label>
                    <input type="text" name="stdcity" id="" class="form-control">
                    @error('stdcity')
                    <span class="text-danger">{{$message}}</span>
                @enderror
                </div>
                <div class="form-group">
                     <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
           </div>
       </div>
    </x-slot>
</x-layouts>