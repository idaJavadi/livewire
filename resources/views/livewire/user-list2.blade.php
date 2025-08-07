<div wire:init="loadUsers">
    <ul>
        @foreach($users as $user)
          <li>{{$user['id']}}</li>
        @endforeach
    </ul>
</div>
