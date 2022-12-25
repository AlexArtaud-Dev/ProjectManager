<button x-bind:class="{'dark' : darkMode === true}" x-on:click="darkMode = !darkMode" class="fixed bottom-0 right-0 m-4 p-2 rounded-full bg-gray-100 dark:bg-background-1100 shadow-lg">
    <svg class="w-6 h-6 text-gray-800 dark:text-gray-100" x-show="darkMode === false" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
        <path d="M12 1v2"></path>
        <path d="M12 21v2"></path>
        <path d="M4.22 4.22l1.42 1.42"></path>
        <path d="M18.36 18.36l1.42 1.42"></path>
        <path d="M1 12h2"></path>
        <path d="M21 12h2"></path>
        <path d="M4.22 19.78l1.42-1.42"></path>
        <path d="M18.36 5.64l1.42-1.42"></path>
        <path d="M12 12a9 9 0 100-18 9 9 0 000 18z"></path>
    </svg>
    <svg class="w-6 h-6 text-gray-800 dark:text-gray-100" x-show="darkMode === true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
        <path d="M12 1v2"></path>
        <path d="M12 21v2"></path>
        <path d="M4.22 4.22l1.42 1.42"></path>
        <path d="M18.36 18.36l1.42 1.42"></path>
        <path d="M1 12h2"></path>
        <path d="M21 12h2"></path>
        <path d="M4.22 19.78l1.42-1.42"></path>
        <path d="M18.36 5.64l1.42-1.42"></path>
        <path d="M12 12a9 9 0 100-18 9 9 0 000 18z"></path>
        <path d="M12 5v14"></path>
    </svg>
</button>
