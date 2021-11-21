@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'small text-success']) }}>
        {{ $status }}
    </div>
@endif
