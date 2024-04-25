<?php require "partials/header.php";  ?>

    <div class="min-h-full">
        <?php require "partials/nav.php"; ?>
        <?php require "partials/banner.php"; ?>
        <main>
            <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
                <form method="post">
                    <div class="relative max-w-sm mb-10 justify-self-center">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                            </svg>
                        </div>
                        <input datepicker type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
                    </div>
                    <a href="/course/subject/section/add-user">
                        <button type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 ">
                            Add Users
                        </button>
                    </a>
                    <header class="bg-white my-5 text-center shadow">
                        <div class="mx-auto px-4 py-6 sm:px-6 lg:px-8">
                            <h1 class="text-3xl font-bold tracking-tight text-gray-900">Professors</h1>
                        </div>
                    </header>
                    <?php if(!$profs): ?>
                        <h5 class="mb-1 text-xl font-medium">
                            There is no assigned professor yet...
                        </h5>
                    <?php else: ?>
                        <div class="grid grid-cols-3 gap-4">
                            <?php foreach($profs as $prof): ?>
                                <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                    <div class="flex flex-col items-center py-10">
                                        <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">
                                            <a href="/account?id=<?= $prof['accountID'] ?>">
                                                <?= formatToFullName($prof['FirstName'], $prof['MiddleName'], $prof['LastName']) ?>
                                            </a>
                                        </h5>
                                        <span class="text-sm text-gray-500 dark:text-gray-400">
                                            <?= $prof['username'] ?>
                                        </span>
                                        <span class="text-sm text-gray-500 dark:text-gray-400">
                                            <?= $userType[$prof['userType']] ?>
                                        </span>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                    <header class="bg-white my-5 text-center shadow">
                        <div class="mx-auto px-4 py-6 sm:px-6 lg:px-8">
                            <h1 class="text-3xl font-bold tracking-tight text-gray-900">Students</h1>
                        </div>
                    </header>

                    <?php if(!$rows): ?>
                        <h5 class="mb-1 text-xl font-medium">
                            There is no assigned student yet...
                        </h5>
                    <?php else: ?>
                        <div class="grid grid-cols-3 gap-4">
                            <?php foreach($rows as $row): ?>
                                <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                    <div class="flex flex-col items-center py-10">
                                        <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">
                                            <a href="/account?id=<?= $row['accountID'] ?>">
                                                <?= formatToFullName($row['FirstName'], $row['MiddleName'], $row['LastName']) ?>
                                            </a>
                                        </h5>
                                        <span class="text-sm text-gray-500 dark:text-gray-400">
                                            <?= $row['username'] ?>
                                        </span>
                                        <span class="text-sm text-gray-500 dark:text-gray-400">
                                            <?= $userType[$row['userType']] ?>
                                        </span>
                                        <div class="flex mt-4 space-x-3 md:mt-6">
                                            <div class="inline-flex rounded-md shadow-sm" role="group">
                                                <button type="button" class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-l-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                                                    <input class="hidden" type="radio" id="Login21" name="row1" />
                                                    <label for="Login21">Present</label>
                                                </button>
                                                <button type="button" class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-l-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                                                    <input class="hidden" type="radio" id="Login21" name="row1" />
                                                    <label for="Login21">Present</label>
                                                </button>
                                                <button type="button" class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-l-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                                                    <input class="hidden" type="radio" id="Login21" name="row1" />
                                                    <label for="Login21">Present</label>
                                                </button>
                                                <button type="button" class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-l-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                                                    <input class="hidden" type="radio" id="Login21" name="row1" />
                                                    <label for="Login21">Present</label>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach;?>
                        </div>
                    <?php endif; ?>
                </form>
            </div>
        </main>
    </div>

<?php require "partials/footer.php";  ?>