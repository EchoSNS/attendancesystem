<?php require "partials/header.php";  ?>

    <div class="min-h-full">
        <?php require "partials/nav.php"; ?>
        <?php require "partials/banner.php"; ?>
        <main>
            <div class="mx-auto max-w-2xl py-6 sm:px-6 lg:px-8">
                <form method="post">
                    <div class="space-y-12">
                        <div class="border-b border-gray-900/10 pb-12">
                            <h2 class="text-base font-semibold leading-7 text-gray-900">Subject Information</h2>
                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-9">

                                <div class="sm:col-span-full">
                                    <label for="course" class="block mb-2 text-sm font-medium text-gray-900">
                                        <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                                            Select a course
                                        </span>
                                    </label>
                                    <select id="course" name="course" autocomplete="course" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        <option value ="-1">Select a course</option>
                                        <?php foreach($courses as $course): ?>
                                            <option value="<?= $course['courseID'] ?>" <?= ($currentSubject['courseID'] ?? "") == $course['courseID'] ? "selected" : "" ?>><?= htmlspecialchars($course['courseName']) ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <?php if(isset($errors['course'])): ?>
                                        <p class="text-red-500 text-xs mt-2"><?= $errors['course'] ?></p>
                                    <?php endif; ?>
                                </div>

                                <div class="sm:col-span-full">
                                    <label for="subjectName" class="block text-sm font-medium leading-6 text-gray-900">
                                        <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                                            Subject Name
                                        </span>
                                    </label>
                                    <div class="mt-2">
                                        <input value="<?= $currentSubject['subjectName'] ?? "" ?>" type="text" name="subjectName" id="subjectName" autocomplete="subjectName" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        <?php if(isset($errors['subjectName'])): ?>
                                            <p class="text-red-500 text-xs mt-2"><?= $errors['subjectName'] ?></p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-span-full">
                                    <label for="about" class="block text-sm font-medium leading-6 text-gray-900">Subject Description</label>
                                    <div class="mt-2">
                                        <textarea id="description" name="description" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"><?= $currentSubject['subjectDescription'] ?? "" ?></textarea>
                                        <?php if(isset($errors['description'])): ?>
                                            <p class="text-red-500 text-xs mt-2"><?= $errors['description'] ?></p>
                                        <?php endif; ?>
                                    </div>
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