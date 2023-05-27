@props(['active'])

@php
$classes = ($active ?? false)
            ? 'px-4 py-2 hover:cursor-pointer hover:bg-slate-100 dark:hover:bg-slate-800 rounded-md border-b-2 border-blue-800'
            : 'px-4 py-2 hover:cursor-pointer hover:bg-slate-100 dark:hover:bg-slate-800 rounded-md';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
