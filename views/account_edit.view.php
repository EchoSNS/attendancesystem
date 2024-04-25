<?php require "partials/header.php";  ?>

    <div class="min-h-full">
        <?php require "partials/nav.php"; ?>
        <?php require "partials/banner.php"; ?>
        <main>
            <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
                <form method="post">
                    <div class="space-y-12">
                        <div class="border-b border-gray-900/10 pb-12 ">
                            <h2 class="text-base font-semibold leading-7 text-gray-900">Profile</h2>

                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-9">
                                <div class="sm:col-span-4">
                                    <label for="accountID" class="block text-sm font-medium leading-6 text-gray-900">User ID</label>
                                    <div class="mt-2">
                                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-lg">
                                            <span class="flex select-none items-center pl-3 text-gray-500 sm:text-sm">attendancesystem.test/account?id=</span>
                                            <input disabled value="<?= $currentUser['accountID'] ?>" type="text" name="accountID" id="accountID" autocomplete="accountID" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="AUTO GENERATED">
                                        </div>
                                    </div>
                                </div>

                                <div class="sm:col-span-4">
                                    <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Username</label>
                                    <div class="mt-2">
                                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-lg">
                                            <input disabled value="<?= $currentUser['username'] ?>" type="text" name="username" id="username" autocomplete="username" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="AUTO GENERATED">
                                        </div>
                                    </div>
                                </div>

                                <div class="sm:col-span-4">
                                    <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                                    <div class="mt-2">
                                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-lg">
                                            <input value="<?= $currentUser['password'] ?>" type="password" name="password" id="password" autocomplete="password" class="block flex-1 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="AUTO GENERATED">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="border-b border-gray-900/10 pb-12">
                            <h2 class="text-base font-semibold leading-7 text-gray-900">Personal Information</h2>

                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-9">
                                <div class="sm:col-span-3">
                                    <label for="first-name" class="block text-sm font-medium leading-6 text-gray-900">
                                        <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                                            First name
                                        </span>
                                    </label>
                                    <div class="mt-2">
                                        <input value="<?= $currentUser['FirstName'] ?>" type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        <?php if(isset($errors['firstName'])): ?>
                                            <p class="text-red-500 text-xs mt-2"><?= $errors['firstName'] ?></p>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="sm:col-span-3">
                                    <label for="middle-name" class="block text-sm font-medium leading-6 text-gray-900">
                                        Middle name
                                    </label>
                                    <div class="mt-1">
                                        <input value="<?= $currentUser['MiddleName'] ?>" type="text" name="middle-name" id="middle-name" autocomplete="middle-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        <?php if(isset($errors['middleName'])): ?>
                                            <p class="text-red-500 text-xs mt-2"><?= $errors['middleName'] ?></p>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="sm:col-span-3">
                                    <label for="last-name" class="block text-sm font-medium leading-6 text-gray-900">
                                        <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                                            Last name
                                        </span>
                                    </label>
                                    <div class="mt-2">
                                        <input value="<?= $currentUser['LastName'] ?>" type="text" name="last-name" id="last-name" autocomplete="family-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        <?php if(isset($errors['lastName'])): ?>
                                            <p class="text-red-500 text-xs mt-2"><?= $errors['lastName'] ?></p>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="sm:col-span-4">
                                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">
                                        <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                                            Secondary email address
                                        </span>
                                    </label>
                                    <div class="mt-2">
                                        <input value="<?= $currentUser['secondary_email'] ?>" id="email" name="email" type="email" autocomplete="email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        <?php if(isset($errors['email'])): ?>
                                            <p class="text-red-500 text-xs mt-2"><?= $errors['email'] ?></p>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="relative sm:col-span-2">
                                    <label for="birthDate" class="block text-sm font-medium leading-6 text-gray-900">
                                        <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                                            Birth Date
                                        </span>
                                    </label>
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none mt-2">
                                    </div>
                                    <input datepicker datepicker-autohide value="<?= $currentUser['Birthdate'] ?>" id="birthDate" name="birthDate" type="text" class="mt-2 border rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 block w-full pl-10 p-1.5" placeholder="Select date">
                                    <?php if(isset($errors['birthDate'])): ?>
                                        <p class="text-red-500 text-xs mt-2"><?= $errors['birthDate'] ?></p>
                                    <?php endif; ?>
                                </div>

                                <div class="sm:col-span-3">
                                    <label for="course" class="block text-sm font-medium leading-6 text-gray-900">
                                        <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                                            Course
                                        </span>
                                    </label>
                                    <div class="mt-2">
                                        <select id="course" name="course" autocomplete="course" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                            <option value ="-1">Select a course</option>
                                            <?php foreach($courses as $course): ?>
                                                <option value="<?= $course['courseID'] ?>" <?= ($currentUser['courseID'] ?? "") == $course['courseID'] ? "selected" : "" ?>><?= htmlspecialchars($course['courseName']) ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <?php if(isset($errors['course'])): ?>
                                            <p class="text-red-500 text-xs mt-2"><?= $errors['course'] ?></p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="border-b border-gray-900/10 pb-12">
                            <h2 class="text-base font-semibold leading-7 text-gray-900">Account Type</h2>

                            <div class="mt-10 space-y-10">
                                <fieldset>
                                    <div class="space-y-6">
                                        <?php for($index = 0; $index < count($userTypes); $index++ ): ?>
                                            <div class="flex items-center gap-x-3">
                                                <input id="<?= $userTypes[$index] ?>" value="<?= $index ?>" name="userType" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600" <?= ($currentUser['userType'] ?? "") == $index ? "checked" : "" ?>>
                                                <label for="<?= $userTypes[$index] ?>" class="block text-sm font-medium leading-6 text-gray-900"><?= $userTypes[$index] ?></label>
                                            </div>
                                        <?php endfor; ?>
                                    </div>
                                </fieldset>
                                <?php if(isset($errors['userType'])): ?>
                                    <p class="text-red-500 text-xs mt-2"><?= $errors['userType'] ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6 flex items-center justify-end gap-x-6">
                        <a href="/accounts"><button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button></a>
                        <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                    </div>
                </form>
            </div>
        </main>
    </div>

<?php require "partials/footer.php";  ?>