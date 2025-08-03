<div class="container my-3">
    <div class="row">
        <div class="col">
            <div class="d-flex justify-content-end">
                <a href="{{ route('courses.create') }}" class="btn btn-success">create</a>
            </div>
            <div>
                <div class="col-4 mb-4">
                    <label for="">search : </label>
                    <input type="text" class="form-control" wire:model.live="search">
                    <button class="btn btn-info mt-3" wire:click="$toggle('sort')">
                        Sort {{ $sort ? 'asc' : 'desc' }}
                    </button>
                </div>
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Setting</th>
                    </tr>
                    @foreach ($courses as $course)
                        <tr>
                            <td>{{ $course->id }}</td>
                            <td>{{ $course->name }}</td>
                            <td>{{ $course->price }}</td>
                            <td>
                                {{-- <button wire:confirm="ایا از حذف داده ها اطمینان دارید؟" wire:click="delete({{ $course->id }})"
                                    class="btn btn-danger">Delete</button>   --}}

                                <button wire:confirm.prompt="are u sure? type hassan to delete|hassan"
                                    wire:click="delete({{ $course->id }})" class="btn btn-danger">Delete</button>

                                <a href="{{ route('courses.show', $course) }}" class="btn btn-primary">Show</a>
                            </td>
                        </tr>
                    @endforeach

                </table>

                {{-- <button class="btn btn-info" @click="$wire.$refresh()">refresh</button> --}}
            </div>

        </div>
    </div>
</div>
