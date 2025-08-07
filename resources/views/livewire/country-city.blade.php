<div class="container py-4">
    <div class="row g-3">
        <!-- Country Select -->
        <div class="col-md-6">
            <label for="country" class="form-label fw-bold">Country</label>
            <select id="country" class="form-select" wire:model.live="selectedCountry">
                <option selected disabled>Choose country</option>
                @foreach($countries as $country)
                    <option value="{{ $country }}">{{ $country }}</option>
                @endforeach
            </select>
        </div>

        <!-- City Select -->
        <div class="col-md-6">
            <label for="city" class="form-label fw-bold">City</label>
            <select id="city" class="form-select" wire:model="selectedCity">
                @foreach($cities as $city)
                    <option value="{{ $city }}">{{ $city }}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>
