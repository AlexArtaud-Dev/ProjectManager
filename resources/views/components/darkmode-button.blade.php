{{--// button always displays in the bottom right corner to toggle dark mode with a sun or moon icon--}}
<button x-on:click="darkMode = !darkMode" class="fixed bottom-0 right-0 m-4 p-2 rounded-full bg-gray-100 dark:bg-background-1100 border border-gray-200 dark:border-background-1100 shadow-lg">
    <svg x-show="darkMode === false" class="w-6 h-6 text-gray-600 dark:text-background-1100" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
        <path d="M12 1v2M12 21v2M4.22 4.22l1.42 1.42M18.36 18.36l1.42 1.42M1 12h2M21 12h2M4.22 19.78l1.42-1.42M18.36 5.64l1.42-1.42"></path>
    </svg>
    <svg x-show="darkMode === true" class="w-6 h-6 text-gray-600 dark:text-secondary-200 dark:shadow-md dark:bg-background-500" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
        <path fill="none" d="M0 0h24v24H0z"/> <path fill-rule="nonzero" d="M10 7a7 7 0 0 0 12 4.9v.1c0 5.523-4.477 10-10 10S2 17.523 2 12 6.477 2 12 2h.1A6.979 6.979 0 0 0 10 7zm-6 5a8 8 0 0 0 15.062 3.762A9 9 0 0 1 8.238 4.938 7.999 7.999 0 0 0 4 12z"/>
    </svg>
</button>
