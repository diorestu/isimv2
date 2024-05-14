<div class="form-floating mb-0">
    <input {{ $attributes->class(['form-control'])->merge(['type' => 'text']) }}">
    <label for="floatingInput">{{ $slot }}</label>
</div>
