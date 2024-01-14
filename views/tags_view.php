<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Your Title</title>
    <!-- Include Tailwind CSS via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Additional styles or links go here -->
</head>

<body class="bg-gray-800">


    <div class="flex ">
        <aside class="z-20 flex-shrink-0 hidden w-60 pl-2 overflow-y-auto bg-gray-800 md:block">
            <div class="text-white">
                <div class="flex p-2 bg-gray-800">
                    <div class="flex py-3 px-2 items-center">
                        <p class="text-2xl text-green-500 font-semibold">SA</p>
                        <a href="index.php?page=dashboard">
                            <p class="ml-2 font-semibold italic">DASHBOARD</p>
                        </a>
                    </div>
                </div>
                <div class="flex justify-center">
                    <div>
                        <img class="hidden h-24 w-24 rounded-full sm:block object-cover mr-2 border-4 border-green-400" src="https://image.flaticon.com/icons/png/512/149/149071.png" alt="">
                        <p class="font-bold text-base text-gray-400 pt-2 text-center w-24">Safwan</p>
                    </div>
                </div>

        </aside>

        <div class="flex my-12 flex-col flex-1 w-full overflow-y-auto">
            <div>
                <button id="openModalButton" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Ajouter un tag
                </button>


                <div id="tagModal" class="hidden fixed top-0 left-0 w-full h-full bg-gray-800 bg-opacity-50 flex items-center justify-center">
                    <form action="index.php?page=tags" method="POST">
                        <div class="bg-white p-8 rounded shadow-lg">
                            <h1 class="text-2xl font-bold mb-4">Ajouter un tag</h1>
                            <input type="text" name="tag_name" id="tagInput" class="border rounded px-3 py-2 mb-4" placeholder="Entrez le tag">
                            <button id="addTagButton" type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                Ajouter le tag
                            </button>
                            <button id="closeModalButton" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded ml-2">
                                Fermer
                            </button>
                        </div>
                    </form>
                </div>

                <div class="col-span-12 mt-5">
                    <div class="grid gap-2 grid-cols-1 lg:grid-cols-1">
                        <div class="bg-white p-4 shadow-lg rounded-lg">
                            <h1 class="font-bold text-base">Table</h1>
                            <div class="mt-4">
                                <div class="flex flex-col">
                                    <div class="-my-2 overflow-x-auto">
                                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg bg-white">
                                            <table class="min-w-full divide-y divide-gray-200">

                                                <thead>
                                                    <tr>
                                                        <th class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                            <div class="flex cursor-pointer">
                                                                <span class="mr-2">Categorie_ID</span>
                                                            </div>
                                                        </th>
                                                        <th class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                            <div class="flex cursor-pointer">
                                                                <span class="mr-2">Categorie_Name</span>
                                                            </div>
                                                        </th>
                                                        <th class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                            <div class="flex cursor-pointer">
                                                                <span class="mr-2">ACTION</span>
                                                            </div>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody class="bg-white divide-y divide-gray-200">
                                                    <?php foreach ($tags as $tag) : ?>
                                                        <tr>
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                <p class="text-xs text-gray-400"><?= $tag['tag_id']; ?></p>
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                <p><?= $tag['tag_name']; ?></p>
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                <form action="index.php?page=tags" method="post">
                                                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#editModal<?= $tag['tag_id']; ?>">
                                                                        Modifier
                                                                    </button>
                                                                    <input type="hidden" name="editId" value="<?= $tag['tag_id']; ?>">


                                                                    <button type="submit" name="tagDelete" class="btn btn-danger">Supprimer</button>
                                                                    <input type="hidden" name="tagId" value="<?= $tag['tag_id']; ?>">
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    <script>
        const openModalButton = document.getElementById('openModalButton');
        const tagModal = document.getElementById('tagModal');
        const closeModalButton = document.getElementById('closeModalButton');
        const addTagButton = document.getElementById('addTagButton');
        const tagInput = document.getElementById('tagInput');

        openModalButton.addEventListener('click', () => {
            tagModal.classList.remove('hidden');
        });


        closeModalButton.addEventListener('click', () => {
            tagModal.classList.add('hidden');
        });

        // Ajouter le tag (vous pouvez personnaliser cette partie selon vos besoins)
        addTagButton.addEventListener('click', () => {
            const tagValue = tagInput.value.trim();
            const isUpdate = document.getElementById('updateTagInput').value === '1';

            if (tagValue !== '') {
                if (isUpdate) {
                    // Update the tag (you may want to add more logic here)
                    console.log(`Tag mis à jour : ${tagValue}`);
                } else {
                    // Add the tag to your tag management system
                    console.log(`Tag ajouté : ${tagValue}`);
                }
                // Close the modal
                tagModal.classList.add('hidden');
            }
        });
    </script>