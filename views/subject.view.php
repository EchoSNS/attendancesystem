<?php require "partials/header.php";  ?>

    <div class="min-h-full">
        <?php require "partials/nav.php"; ?>
        <?php require "partials/banner.php"; ?>
        <main>
            <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
                <?php if(!$subjectSections): ?>
                    <h5 class="mb-1 text-xl font-medium">
                        There is no assigned sections yet...
                    </h5>
                <?php else: ?>
                    <?php foreach($subjectSections as $section): ?>
                        <div class="w-full my-5 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <div class="flex flex-col items-center py-10">
                                <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">
                                    <a href="/course/subject/section?id=<?= $section['sectionNumber'] ?>" class="hover:text-blue-400">
                                        <?= "Section Number: " . $section['sectionNumber'] ?>
                                    </a>
                                </h5>
                                <span class="text-sm text-gray-500 dark:text-gray-400"><?= $section['schedule'] ?></span>
                                <div class="flex mt-4 space-x-3 md:mt-6">
                                    <a href="/section/edit?id=<?= $section['sectionNumber'] ?>" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        Edit
                                    </a>
                                    <a href="/section/remove?id=<?= $section['sectionNumber'] ?>" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-gray-900 bg-red-600 text-white rounded-lg hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-gray-200">
                                        Remove
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                <?php endif; ?>
            </div>
        </main>
    </div>

<?php require "partials/footer.php";  ?>