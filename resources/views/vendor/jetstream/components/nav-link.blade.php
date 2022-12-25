@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-indigo-400 dark:border-primary-200 text-sm font-medium leading-5 text-gray-900 dark:text-primary-200 focus:outline-none focus:border-indigo-700 dark:focus:border-primary-400 transition'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 dark:text-primary-400 hover:text-gray-700 dark:hover:text-primary-100 hover:border-gray-300 dark:border-primary-300 focus:outline-none focus:text-gray-700 dark:focus:text-primary-400 focus:border-gray-300 dark:focus:border-primary-400 transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
