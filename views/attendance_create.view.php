<?php require "partials/header.php";  ?>

    <div class="min-h-full">
        <?php require "partials/nav.php"; ?>
        <?php require "partials/banner.php"; ?>
        <main>
            <div class="mx-auto max-w-2xl py-6 sm:px-6 lg:px-8">
                <form method="post">
                    <div class="space-y-12">
                        <div class="border-b border-gray-900/10 pb-12">
                            <h2 class="text-base font-semibold leading-7 text-gray-900">Attendance Information</h2>
                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-9">

                                <div class="sm:col-span-full">
                                    <label for="section" class="block mb-2 text-sm font-medium text-gray-900">
                                        <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                                            Select a section
                                        </span>
                                    </label>
                                    <select id="section" name="section" autocomplete="section" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        <option value ="-1">Select a course</option>
                                        <?php foreach($subjectSections as $section): ?>
                                            <option value="<?= $section['sectionNumber'] ?>" <?= ($_POST['section'] ?? "") == $section['sectionNumber'] ? "selected" : "" ?>><?= htmlspecialchars($section['subjectName']) . " (Section: " . htmlspecialchars($section['sectionNumber']) . ")" ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <?php if(isset($errors['section'])): ?>
                                        <p class="text-red-500 text-xs mt-2"><?= $errors['section'] ?></p>
                                    <?php endif; ?>
                                </div>

                                <div class="sm:col-span-full">
                                    <label for="accountID" class="block mb-2 text-sm font-medium text-gray-900">
                                        <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                                            Select a section
                                        </span>
                                    </label>
                                    <select id="accountID" name="accountID" autocomplete="accountID" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        <option value ="-1">Select a user</option>
                                        <?php foreach($users as $user): ?>
                                            <option value="<?= $user['accountID'] ?>" <?= ($_POST['accountID'] ?? "") == $user['accountID'] ? "selected" : "" ?>><?= htmlspecialchars($user['username']) . " (ID: " . htmlspecialchars($user['accountID']) . ")" ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <?php if(isset($errors['accountID'])): ?>
                                        <p class="text-red-500 text-xs mt-2"><?= $errors['accountID'] ?></p>
                                    <?php endif; ?>
                                </div>

                                <div class="relative sm:col-span-9">
                                    <label for="date" class="block text-sm font-medium leading-6 text-gray-900">
                                        <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                                            Birth Date
                                        </span>
                                    </label>
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none mt-2">
                                    </div>
                                    <input datepicker datepicker-autohide value="<?= $_POST['date'] ?? "" ?>" id="date" name="date" type="text" class="mt-3 border text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-1.5" placeholder="Select date">
                                    <?php if(isset($errors['date'])): ?>
                                        <p class="text-red-500 text-xs mt-2"><?= $errors['date'] ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6 flex items-center justify-end gap-x-6">
                        <a href="/subjects"><button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button></a>
                        <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                    </div>
                </form>
            </div>
        </main>
    </div>

<?php require "partials/footer.php";  ?>