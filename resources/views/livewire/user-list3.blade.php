<div>
    <ul>
        @foreach($users as $user)
           <li>{{$user['name']}}</li>
            <button class="btn btn-danger" wire:click="deleteUser({{$user['id']}})">delete</button>
        @endforeach
    </ul>
</div>
