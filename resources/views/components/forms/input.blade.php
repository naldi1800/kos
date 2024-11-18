<div class="mb-3 col-{{ $cols }} {{($hidden)? 'visually-hidden' : ''}}">
    @if($label)
        <label for="{{ $name }}">{{ $label }}</label>
    @endif
    <input type="{{ $type }}" name="{{ $name }}" value="{{ old($name, $value) }}" id="{{ $name }}"
        class="form-control @error($name) is-invalid @enderror" >
    @error($name)
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
