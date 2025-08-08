<div>
{{--    <h1>hello big</h1>--}}
{{--    <button wire:click="increment" class="btn btn-success">+</button>--}}
{{--    <p>Count is parent : {{$count }}</p>--}}
{{--    <livewire:small :count="$count"></livewire:small>--}}
{{--    <h1>big</h1>--}}
{{--    <p>message from small:  {{$message}}</p>--}}
{{--    <livewire:small></livewire:small>--}}
    <div>
        <button wire:click="addChild">new small</button>

        <div style="margin-top: 10px">
            @foreach($children as $childId)
                <div wire:key="small-{{ $childId }}" style="margin-bottom: 10px; border: #1f2937; padding: 10px">
                    <livewire:small :child-id="$childId" :key="$childId" />
                </div>
            @endforeach
        </div>
    </div>

</div>
