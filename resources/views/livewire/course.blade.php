<div>
    <div class="col-4 mb-4">
        <label for="">search : </label>
        <input type="text" class="form-control" wire:model.live="search">
{{--        <input type="text" class="form-control" wire:keydown.enter="$set('search',$event.target.value)">--}}
        <button class="btn btn-info mt-3" wire:click="$toggle('sort')" )>sort : {{$sort ? 'asc' : 'desc'}}</button>
    </div>
    <table class="table table-bordered table-striped">
        <tr>
            <th>#</th>
            <th>name</th>
            <th>price</th>
            <th>setting</th>
        </tr>
        @foreach( $courses as $course)
            <tr>
                <td>{{$course->id}}</td>
                <td>{{$course->name}}</td>
                <td>{{$course->price}}</td>
                <td>
                    <button wire:confirm.prompt="wanna delete?|yes" wire:click="delete({{$course->id}})" class="btn btn-danger">delete</button>
                </td>
            </tr>
        @endforeach
    </table>
{{--    <input type="text" wire:model="name" placeholder="Enter name">--}}
{{--    <button wire:click="$dispatch('change-name', { name: name })">--}}
{{--        change name--}}
{{--    </button>--}}
{{--    <button wire:click="$parent.changeName('fifi')" class="btn btn-info">change name</button>--}}

</div>
