<!DOCTYPE html>
<html lang="fr" class="h-full bg-gray-50">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'ISTICHARA - Plateforme Juridique Marocaine' ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body class="h-full">
    <div class="min-h-full">

        <div class="hidden md:fixed md:inset-y-0 md:flex md:w-64 md:flex-col">
            <div class="flex min-h-0 flex-1 flex-col bg-blue-900">

                <div class="flex h-16 flex-shrink-0 items-center px-4 bg-blue-950">
                    <div class="flex items-center">
                        <i class="fas fa-balance-scale text-amber-600 text-2xl mr-3"></i>
                        <span class="text-white text-xl font-bold">ISTICHARA</span>
                    </div>
                </div>


                <div class="flex flex-1 flex-col overflow-y-auto">
                    <nav class="flex-1 space-y-1 px-2 py-4">
                        <a href="/" class="text-blue-100 hover:bg-blue-800 group flex items-center px-4 py-3 text-sm font-medium rounded-md transition-colors">
                            <i class="fas fa-home text-amber-600 mr-3 text-lg"></i>
                            Accueil
                        </a>

                        <a href="/avocats" class="text-blue-100 hover:bg-blue-800 group flex items-center px-4 py-3 text-sm font-medium rounded-md transition-colors">
                            <i class="fas fa-user-tie text-amber-600 mr-3 text-lg"></i>
                            Avocats
                        </a>

                        <a href="/huissiers" class="text-blue-100 hover:bg-blue-800 group flex items-center px-4 py-3 text-sm font-medium rounded-md transition-colors">
                            <i class="fas fa-gavel text-amber-600 mr-3 text-lg"></i>
                            Huissiers de Justice
                        </a>
                        <a href="/emploi"
                            class="text-blue-100 hover:bg-blue-800 group flex items-center px-4 py-3 text-sm font-medium rounded-md transition-colors">
                            <i class="fas fa-calendar-week text-amber-600 mr-3 text-lg"></i>
                            Professionnel – Emploi du temps
                        </a>

                        <a href="/stats" class="text-blue-100 hover:bg-blue-800 group flex items-center px-4 py-3 text-sm font-medium rounded-md transition-colors">
                            <i class="fas fa-chart-pie text-amber-600 mr-3 text-lg"></i>
                            Statistiques
                        </a>

                        <a href="/toggle_form/create" class="text-blue-100 hover:bg-blue-800 group flex items-center px-4 py-3 text-sm font-medium rounded-md transition-colors">
                            <i class="fas fa-plus text-amber-600 mr-3"></i>
                            Nouveau Professionnel
                        </a>
                    </nav>
                </div>

                <!-- Footer -->
                <div class="flex flex-shrink-0 bg-blue-950 p-4">
                    <div class="w-full text-center">
                        <p class="text-xs text-blue-300">© 2025 ISTICHARA</p>
                        <p class="text-xs text-blue-400 mt-1">Justice pour tous</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main content area -->
        <div class="md:pl-64 flex flex-col flex-1">
            <!-- Top navbar -->
            <div class="sticky top-0 z-10 flex h-16 flex-shrink-0 bg-white shadow">
                <button type="button" class="border-r border-gray-200 px-4 text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-900 md:hidden">
                    <span class="sr-only">Open sidebar</span>
                    <i class="fas fa-bars text-xl"></i>
                </button>

                <div class="flex flex-1 justify-between px-4 sm:px-6 lg:px-8">
                    <div class="flex flex-1 items-center">
                        <div class="w-full max-w-lg">
                            <label for="search" class="sr-only">Rechercher</label>
                            <div class="relative">
                                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                    <i class="fas fa-search text-gray-400"></i>
                                </div>
                                <input id="search" name="search" class="block w-full rounded-md border-gray-300 bg-gray-50 py-2 pl-10 pr-3 text-sm placeholder-gray-500 focus:border-blue-900 focus:bg-white focus:text-gray-900 focus:outline-none focus:ring-1 focus:ring-blue-900" placeholder="Rechercher..." type="search">
                            </div>
                        </div>
                    </div>
                    <a href="profs/stats?tarif=100&type=avocat&id=2" class="btn-action btn-primary">
                        <!-- <i class="fas fa-plus"></i> -->
                        prof stats
                    </a>
                    <div class="ml-4 flex items-center md:ml-6">
                        <button type="button" class="rounded-full bg-white p-1 text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-900 focus:ring-offset-2">
                            <span class="sr-only">View notifications</span>
                            <i class="fas fa-bell text-xl"></i>
                        </button>

                        <div class="relative ml-3">
                            <div class="flex items-center">
                                <?php
                                if (isset($_SESSION["user"])) { ?>

                                    <a style="cursor: pointer;" href="/update/user?user=<?= isset($_SESSION["user"]) ? $_SESSION["user"] : "1"  ?>" class="flex max-w-xs items-center rounded-full bg-white text-sm focus:outline-none focus:ring-2 focus:ring-blue-900 focus:ring-offset-2">
                                        <span class="sr-only">Open user menu</span>
                                        <div class="h-10 w-10 rounded-full bg-blue-900 flex items-center justify-center">
                                            <span class="text-white font-semibold">AD</span>
                                        </div>
                                    </a>

                                    <div class="ml-3 hidden md:block">
                                        <p class="text-sm font-medium text-gray-700"> <?= $_SESSION["user"]->getName() ?> </p>
                                        <p class="text-xs text-gray-500"> <?= $_SESSION["user"]->getEmail() ?> </p>
                                    </div>
                                <?php } else { ?>
                                    <a href="#" class="btn-action btn-primary">
                                        <!-- <i class="fas fa-plus"></i> -->
                                        LOg in
                                    </a>

                                <?php } ?>


                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Page content -->
            <main class="flex-1">