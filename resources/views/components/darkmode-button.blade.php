{{--// button always displays in the bottom right corner to toggle dark mode with a sun or moon icon--}}
<button x-on:click="darkMode = !darkMode" class="fixed bottom-0 right-0 m-4 rounded-full bg-gray-100 dark:bg-background-700 border border-gray-200 dark:border-background-700 shadow-lg">
    <span x-show="darkMode === false" class="fa fa-sun"></span>
    <span x-show="darkMode === true" class="fa fa-moon text-secondary-300"></span>
</button>
