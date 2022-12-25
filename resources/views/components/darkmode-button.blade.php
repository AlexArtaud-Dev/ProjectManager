{{--// button always displays in the bottom right corner to toggle dark mode with a sun or moon icon--}}
<button x-on:click="darkMode = !darkMode" class="fixed bottom-0 right-0 m-4 p-2 rounded-full bg-gray-100 dark:bg-background-1100 border border-gray-200 dark:border-background-1100 shadow-lg">
    <svg x-show="darkMode === false" class="w-6 h-6 text-gray-600 dark:text-background-1100" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
        <path d="M12 4v16m8-8H4"></path>
    </svg>
    <svg x-show="darkMode === true" class="w-6 h-6 text-gray-600 dark:text-background-1100" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
        <path d="M12 4v16m8-8H4"></path>
        <path d="M5 12h14"></path>
    </svg>
</button>
