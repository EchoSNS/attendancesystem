<?php require "partials/header.php";  ?>

    <div class="min-h-full">
        <?php require "partials/nav.php"; ?>
        <?php require "partials/banner.php"; ?>
        <main>
            <div class="mx-auto max-w-2xl py-6 sm:px-6 lg:px-8">
                <form method="post">
                    <div class="space-y-12">
                        <div class="border-b border-gray-900/10 pb-12">
                            <h2 class="text-base font-semibold leading-7 text-gray-900">Section Information</h2>
                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-9">

                                <div class="sm:col-span-full">
                                    <label for="subjectNumber" class="block mb-2 text-sm font-medium text-gray-900">
                                        <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                                            Select a subject
                                        </span>
                                    </label>
                                    <?php if(!$subjects): ?>
                                        <p class="text-gray-900 text-xs">There is no available subjects.</p>
                                    <?php else: ?>
                                        <select id="subjectNumber" name="subjectNumber" autocomplete="subjectNumber" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                            <option value ="-1">Select a subject</option>
                                            <?php foreach($subjects as $subject): ?>
                                                <option value="<?= $subject['subjectNumber'] ?>" <?= ($_POST['subjectNumber'] ?? "") == $subject['subjectNumber'] ? "selected" : "" ?>><?= htmlspecialchars($subject['subjectName']) ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <?php if(isset($errors['subjectNumber'])): ?>
                                            <p class="text-red-500 text-xs mt-2"><?= $errors['subjectNumber'] ?></p>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                </div>

                                <div class="sm:col-span-full">
                                    <label for="subjectName" class="block text-sm font-medium leading-6 text-gray-900">
                                        <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                                            Section Schedule
                                        </span>
                                    </label>
                                    <div class="mt-2">
                                        <input value="<?= $_POST['schedule'] ?? "" ?>" type="text" name="schedule" id="schedule" autocomplete="schedule" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        <?php if(isset($errors['schedule'])): ?>
                                            <p class="text-red-500 text-xs mt-2"><?= $errors['schedule'] ?></p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6 flex items-center justify-end gap-x-6">
                        <a href="/sections"><button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button></a>
                        <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                    </div>
                </form>
            </div>
        </main>
    </div>

<?php require "partials/footer.php";  ?>