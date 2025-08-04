<div class="container my-3">
    <div class="row">
        <div class="col">
            <div class="d-flex justify-content-end">
                {{-- <a href="{{ route('courses.create') }}" class="btn btn-success">create</a> --}}
                <button wire:click='resetAll()' type="button" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    Create
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
                        <th>Status</th>
                        <th>Setting</th>
                    </tr>
                    @foreach ($courses as $course)
                        <tr>
                            <td>{{ $course->id }}</td>
                            <td>{{ $course->name }}</td>
                            <td>{{ $course->price }}</td>
                            <td>
                                <select class="form-control"
                                    wire:change="changeStatus($event.target.value, $event.target.dataset.id)"
                                    data-id="{{ $course->id }}">
                                    <option value="1" {{ $course->status ? 'selected' : '' }}>enable</option>
                                    <option value="0" {{ $course->status ? '' : 'selected' }}>disable</option>
                                </select>
                            </td>
                            <td>

                                <button wire:confirm.prompt="are u sure? type hassan to delete|hassan"
                                    wire:click="delete({{ $course->id }})" class="btn btn-danger">Delete</button>

                                {{-- <a href="{{ route('courses.show', $course) }}" class="btn btn-primary">Show</a> --}}
                                <button wire:click="show({{ $course->id }})" class="btn btn-primary">Show</button>
                                <button wire:click="edit({{ $course->id }})" class="btn btn-warning">Edit</button>
                            </td>
                        </tr>
                    @endforeach

                </table>

            </div>

        </div>
    </div>



    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">
                        {{ $singleCourse ? 'Edit Post' : 'Create Post' }}
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <section>
                                    <form @if($singleCourse) wire:submit.prevent="update({{ $singleCourse->id }})" @else wire:submit.prevent="save" @endif>
                                        <div class="mb-3">
                                            <label class="form-label">Name : </label>
                                            <input type="text"
                                                value="{{ $name ? $name : '' }}"
                                                class="form-control" wire:model="name">
                                            @error('name')
                                                <span class="text-bg-danger px-3 py-1 rounded my-2 d-inline-block">
                                                    {{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Price : </label>
                                            <input type="text"
                                                value="{{ $price ? $price : '' }}"
                                                class="form-control" wire:model="price">
                                            @error('price')
                                                <span class="text-bg-danger px-3 py-1 rounded my-2 d-inline-block">
                                                    {{ $message }}</span>
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


    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="showModal" tabindex="-1" aria-labelledby="showModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="showModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                @if ($singleCourse)
                                    <h5 class="card-title">{{ $singleCourse->name }}</h5>
                                    <p class="card-text">{{ $singleCourse->price }}</p>
                                    <p class="card-text">{{ $singleCourse->view }}</p>
                                @endif

                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>



    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <strong class="me-auto">Bootstrap</strong>
                <small>11 mins ago</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                Hello, world! This is a toast message.
            </div>
        </div>
    </div>

</div>
