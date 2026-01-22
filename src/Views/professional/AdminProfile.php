<div class="min-h-screen bg-gray-100 p-10">

    <div class="max-w-3xl mx-auto bg-white rounded-2xl shadow-lg overflow-hidden">

        <!-- Header -->
        <div class="bg-gradient-to-r from-blue-500 to-blue-600 p-6 text-white">
            <div class="flex items-center gap-4">
                <div class="w-16 h-16 rounded-full bg-white/30 flex items-center justify-center text-2xl font-bold">
                    AD
                </div>
                <div>
                    <h2 class="text-2xl font-bold"><?= $admin['fullname'] ?></h2>
                    <p class="text-indigo-100">Admin • Admin</p>
                </div>
            </div>
        </div>

        <!-- Content -->
        <div class="p-8 space-y-6">

            <!-- Infos principales -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                <div>
                    <p class="text-sm text-gray-500">Nom complet</p>
                    <p class="font-semibold text-gray-800"><?= $admin['fullname'] ?></p>
                </div>

                <div>
                    <p class="text-sm text-gray-500">Email</p>
                    <p class="font-semibold text-gray-800"><?= $admin['email'] ?></p>
                </div>

                <div>
                    <p class="text-sm text-gray-500">TElaphone</p>
                    <span class="inline-block px-3 py-1 rounded-full text-sm font-semibold bg-amber-100 text-amber-700">
                        <?= $admin['telephone'] ?>
                    </span>
                </div>
                <div>
                    <p class="text-sm text-gray-500">Date de creation</p>
                    <p class="font-semibold text-gray-800"><?= $admin['created_at'] ?></p>
                </div>

            </div>
        </div>
    </div>

</div>