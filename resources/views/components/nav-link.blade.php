@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 uppercase py-3 text-sm font-semibold leading-5 text-nightblue dark:text-lowgray focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out relative after:content-[""] after:w-[40px] after:h-[1px] after:bg-nightblue after:absolute after:bottom-0 after:left-0'
            : 'inline-flex items-center px-1 uppercase py-3  text-sm font-normal leading-5 text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 hover:border-gray-300 focus:outline-none focus:text-gray-700 dark:focus:text-gray-300 transition duration-150 ease-in-out relative after:content-[""] after:transition-all after:duration-300 after:ease-in-out after:w-[0px] hover:after:w-[40px] after:h-[1px] after:bg-gray-500 after:absolute after:bottom-0 after:left-0';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
