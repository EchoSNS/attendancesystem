<?php require "partials/header.php";  ?>

    <div class="min-h-full">
        <?php require "partials/nav.php"; ?>
        <?php require "partials/banner.php"; ?>
        <main>
            <div class="mx-auto max-w-8xl py-6 sm:px-6 lg:px-8" id="admins">
                <div class="relative w-full overflow-x-auto shadow-md lg:rounded-lg">
                    <div class="flex px-4 items-center justify-between py-4 bg-white dark:bg-gray-800">
                        <div>
                            <button id="dropdownActionButton" data-dropdown-toggle="dropdownAction" class="inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-3 py-1.5 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700" type="button">
                                <span class="sr-only">Action button</span>
                                Action
                                <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                </svg>
                            </button>
                            <!-- Dropdown menu -->
                            <div id="dropdownAction" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownActionButton">
                                    <li>
                                        <a href="/account/create" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Create Account</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Activate Account/s</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Deactivate Account/s</a>
                                    </li>
                                </ul>
                                <div class="py-1">
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete Account/s</a>
                                </div>
                            </div>
                        </div>
                        <label for="table-search" class="sr-only">Search</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                                </svg>
                            </div>
                            <input type="text" id="table-search-users" class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for users">
                        </div>
                    </div>
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="p-4">
                                <div class="flex items-center">
                                    <input id="checkbox-all-search" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="checkbox-all-search" class="sr-only">checkbox</label>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Full Name & Account ID
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Username
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Password
                            </th>
                            <th scope="col" class="px-6 py-3">
                                User Type
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Birth Date
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Course ID
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Secondary Email
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Account Status
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Actions
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($rows as $row): ?>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td class="w-4 p-4">
                                    <div class="flex items-center">
                                        <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                    </div>
                                </td>
                                <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                    <img class="w-10 h-10 rounded-full" src="../resources/user_profile.png" alt="User image">
                                    <div class="pl-3">
                                            <div class="text-base font-semibold">
                                                <a class="hover:text-blue-400" href="/account?id=<?= $row['accountID'] ?>">
                                                    <?= htmlspecialchars($row['FirstName']) . " " . htmlspecialchars($row['MiddleName']) . " " . htmlspecialchars($row['LastName']) ?>
                                                </a>
                                            </div>
                                            <div class="font-normal text-blue-600">
                                                <a class="hover:text-blue-400" href="/account?id=<?= $row['accountID'] ?>">
                                                    <?= htmlspecialchars($row['accountID']) ?>
                                                </a>
                                            </div>
                                    </div>
                                </th>
                                <td class="px-6 py-4">
                                    <?= htmlspecialchars($row['username']) ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?= htmlspecialchars($row['password']) ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?= htmlspecialchars($accountTypes[$row['userType']]) ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?= htmlspecialchars($row['Birthdate']) ?>
                                </td>
                                <td class="px-6 py-4" data-tooltip-target="<?= $row['courseName'] ?>" data-tooltip-style="light">
                                    <?= htmlspecialchars($row['courseID']) ?>
                                </td>
                                <div id="<?= $row['courseName'] ?>" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 tooltip">
                                    <?= htmlspecialchars($row['courseName']) ?>
                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                </div>
                                <td class="px-6 py-4">
                                    <?= htmlspecialchars($row['secondary_email']) ?>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center">
                                        <div class="h-2.5 w-2.5 rounded-full <?= (isActive($row['accountStatus']) ? "bg-green-500" : "bg-red-500") ?> mr-2"></div> <?= isActive($row['accountStatus']) ? "Active" : "Inactive" ?>
                                    </div>
                                </td>
                                <td class="flex items-center px-6 py-4 space-x-3">
                                    <a href="/account/edit?id=<?= $row['accountID'] ?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                    <a href="/account/remove?id=<?= $row['accountID'] ?>" class="font-medium text-red-600 dark:text-red-500 hover:underline">Remove</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>

<?php require "partials/footer.php";  ?>