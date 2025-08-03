<div class="container my-3">
    <div class="row">
        <div class="col">
            <div class="d-flex justify-content-end">
{{--                <a href="{{ route('courses.create') }}" class="btn btn-success">create</a>--}}
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    create course
                </button>
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


    <div  wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel"> create course </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container border my-4 py-2 rounded">
                        <div class="row">
                            <div class="col">
                                <section>
                                    <form wire:submit.prevent="save">
                                        <div class="mb-3">
                                            <label class="form-label">Name : </label>
                                            <input type="text" class="form-control" wire:model="name">
                                            @error('name')
                                            <span class="text-bg-danger px-3 py-1 rounded my-2"> {{$message}} </span>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Price : </label>
                                            <input type="text" class="form-control" wire:model="price">
                                            @error('price')
                                            <span class="text-bg-danger px-3 py-1 rounded my-2">{{$message}} </span>
                                            @enderror
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>

                                        <div wire:loading class="spinner-border" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                    </form>
                                </section>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>
