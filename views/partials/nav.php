<nav class="bg-gray-800">
<div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
  <div class="flex h-16 items-center justify-between">
    <div class="flex items-center">
      <div class="flex-shrink-0">
        <img class="h-8 w-8" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
      </div>
      <div class="hidden md:block">
        <div class="ml-10 flex items-baseline space-x-4">
          <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
          <a href="/" class="<?= (isURL("/") ? "bg-gray-900 text-white" : "text-gray-300") ?> hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Dashboard</a>


            <a href="/accounts"><button id="dropdownHoverButton" data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover" class="<?= (isURL("/accounts") || (isURL("/account/create")) || (isURL("/account/edit")) || (isURL("/account/remove")) ? "bg-gray-900 text-white" : "text-gray-300") ?> hover:bg-gray-700 hover:text-white rounded-md px-3 py-3 text-sm font-medium" type="button">
                Accounts
            </button></a>
            <!-- Dropdown menu -->
            <div id="dropdownHover" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownHoverButton">
                    <li>
                        <a href="/accounts?userType=0" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Admins</a>
                    </li>
                    <li>
                        <a href="/accounts?userType=1" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Chairpersons</a>
                    </li>
                    <li>
                        <a href="/accounts?userType=2" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Faculties</a>
                    </li>
                    <li>
                        <a href="/accounts?userType=3" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Students</a>
                    </li>
                </ul>
            </div>
            <a href="/courses" class="<?= (isURL("/courses") || isURL("/course") || (isURL("/course/create")) || (isURL("/course/edit")) || (isURL("/course/remove")) ? "bg-gray-900 text-white" : "text-gray-300") ?> hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">
                Courses
            </a>
            <a href="/subjects" class="<?= (isURL("/subjects") || isURL("/subject") || (isURL("/subject/create")) || (isURL("/subject/edit")) || (isURL("/subject/remove")) ? "bg-gray-900 text-white" : "text-gray-300") ?> hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">
                Subjects
            </a>
            <a href="/sections" class="<?= (isURL("/sections") || isURL("/section") || (isURL("/section/create")) || (isURL("/section/edit")) || (isURL("/section/remove")) ? "bg-gray-900 text-white" : "text-gray-300") ?> hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">
                Sections
            </a>
            <a href="/attendances" class="<?= (isURL("/attendances") || isURL("/attendance") || (isURL("/attendance/create")) || (isURL("/attendance/edit")) || (isURL("/attendance/remove")) ? "bg-gray-900 text-white" : "text-gray-300") ?> hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">
                Attendances
            </a>
        </div>
      </div>
    </div>
    <div class="hidden md:block">
      <div class="ml-4 flex items-center md:ml-6">
        <button type="button" class="rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
          <span class="sr-only">View notifications</span>
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
          </svg>
        </button>

        <!-- Profile dropdown -->
        <div class="relative ml-3">
          <div>
              <button id="dropdownUserAvatarButton" data-dropdown-toggle="dropdownAvatar" class="flex mx-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" type="button">
                  <span class="sr-only">Open user menu</span>
                  <img class="w-8 h-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="user photo">
              </button>
          </div>

            <div id="dropdownAvatar" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                    <div>Bonnie Green</div>
                    <div class="font-medium truncate">name@flowbite.com</div>
                </div>
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownUserAvatarButton">
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                    </li>
                </ul>
                <div class="py-2">
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a>
                </div>
            </div>
        </div>
      </div>
    </div>
    <div class="-mr-2 flex md:hidden">
      <!-- Mobile menu button -->
      <button type="button" class="inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" aria-controls="mobile-menu" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <!-- Menu open: "hidden", Menu closed: "block" -->
        <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
        <!-- Menu open: "block", Menu closed: "hidden" -->
        <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>
    </div>
  </div>
</div>

<!-- Mobile menu, show/hide based on menu state. -->
<div class="md:hidden" id="mobile-menu">
  <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
    <a href="#" class="bg-gray-900 text-white block rounded-md px-3 py-2 text-base font-medium" aria-current="page">Dashboard</a>
    <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Team</a>
    <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Projects</a>
    <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Calendar</a>
    <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Reports</a>
  </div>
  <div class="border-t border-gray-700 pb-3 pt-4">
    <div class="flex items-center px-5">
      <div class="flex-shrink-0">
        <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
      </div>
      <div class="ml-3">
        <div class="text-base font-medium leading-none text-white">Tom Cook</div>
        <div class="text-sm font-medium leading-none text-gray-400">tom@example.com</div>
      </div>
      <button type="button" class="ml-auto flex-shrink-0 rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
        <span class="sr-only">View notifications</span>
        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
        </svg>
      </button>
    </div>
    <div class="mt-3 space-y-1 px-2">
      <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Your Profile</a>
      <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Settings</a>
      <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Sign out</a>
    </div>
  </div>
</div>
</nav>