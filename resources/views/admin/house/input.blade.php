<x-main>
    <x-slot name="header">
        <h2 class="ms-5 p-3">
            {{ $mode . ' Kos Kosan' }}
        </h2>
    </x-slot>
    <div class="row">
        @php
            $set = isset($data);
        @endphp
        <div class="col-12 mb-3 row">
            <form action="{{ !$set ? route('house.store') : route('house.set', ['id' => $data->id]) }}" method="POST"
                class="row needs-validation" novalidate>
                @csrf
                @if ($set)
                    @method('put')
                @endif
                <x-forms.input label="Nama Fasilitas" name="facility_name"
                    value="{{ $set ? $data->facility_name : '' }}" />
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
</x-main>
