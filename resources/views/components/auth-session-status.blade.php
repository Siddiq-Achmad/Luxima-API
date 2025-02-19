@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'p-3 rounded bg-success/20 text-success']) }}>
        {{ $status }}
    </div>
@endif
