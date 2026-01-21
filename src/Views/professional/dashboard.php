<div class="py-6 px-4 sm:px-6 lg:px-8">
    <!-- Welcome Header -->
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-900">Bienvenue, Me. Alami Mohamed</h1>
        <p class="mt-2 text-gray-600">Voici un aperçu de votre activité sur ISTICHARA</p>
    </div>

    <!-- Stats Cards Row -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <!-- Chiffre d'Affaires -->
        <div class="stat-card">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-blue-100 text-sm">Chiffre d'Affaires</p>
                    <p class="text-3xl font-bold mt-2">45,500 DH</p>
                    <p class="text-green-300 text-xs mt-2">
                        <i class="fas fa-arrow-up mr-1"></i>
                        +12% ce mois
                    </p>
                </div>
                <div class="w-14 h-14 bg-white/20 rounded-full flex items-center justify-center">
                    <i class="fas fa-coins text-2xl text-amber-400"></i>
                </div>
            </div>
        </div>

        <!-- Total Demandes -->
        <div class="stat-card">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-blue-100 text-sm">Total Demandes</p>
                    <p class="text-3xl font-bold mt-2">127</p>
                    <p class="text-blue-200 text-xs mt-2">
                        <i class="fas fa-clock mr-1"></i>
                        8 en attente
                    </p>
                </div>
                <div class="w-14 h-14 bg-white/20 rounded-full flex items-center justify-center">
                    <i class="fas fa-inbox text-2xl text-white"></i>
                </div>
            </div>
        </div>

        <!-- Clients Uniques -->
        <div class="stat-card">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-blue-100 text-sm">Clients Uniques</p>
                    <p class="text-3xl font-bold mt-2">89</p>
                    <p class="text-green-300 text-xs mt-2">
                        <i class="fas fa-user-plus mr-1"></i>
                        +5 ce mois
                    </p>
                </div>
                <div class="w-14 h-14 bg-white/20 rounded-full flex items-center justify-center">
                    <i class="fas fa-users text-2xl text-white"></i>
                </div>
            </div>
        </div>

        <!-- Heures Travaillées -->
        <div class="stat-card">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-blue-100 text-sm">Heures Travaillées</p>
                    <p class="text-3xl font-bold mt-2">156h</p>
                    <p class="text-blue-200 text-xs mt-2">
                        <i class="fas fa-calendar-check mr-1"></i>
                        Ce mois: 24h
                    </p>
                </div>
                <div class="w-14 h-14 bg-white/20 rounded-full flex items-center justify-center">
                    <i class="fas fa-business-time text-2xl text-white"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Profile Visibility Banner -->
    <div class="bg-gradient-to-r from-amber-500 to-amber-600 rounded-2xl p-6 mb-8 text-white shadow-lg">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
            <div>
                <h3 class="text-xl font-semibold flex items-center">
                    <i class="fas fa-eye mr-3"></i>
                    Visibilité de votre Profil
                </h3>
                <p class="text-amber-100 mt-1">Nombre de visites uniques sur votre profil public</p>
            </div>
            <div class="text-right">
                <p class="text-5xl font-bold">1,247</p>
                <p class="text-amber-100 text-sm mt-1">
                    <i class="fas fa-arrow-up mr-1"></i>
                    +89 cette semaine
                </p>
            </div>
        </div>
    </div>

    <!-- Two Columns Layout -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-8">

        <!-- Demandes en Attente -->
        <div class="bg-white rounded-xl shadow-lg overflow-hidden">
            <div class="p-6 border-b border-gray-200 bg-amber-50 flex items-center justify-between">
                <h2 class="text-xl font-bold text-gray-900 flex items-center">
                    <i class="fas fa-bell text-amber-600 mr-2"></i>
                    Demandes en Attente
                    <span class="ml-2 px-2 py-1 bg-amber-500 text-white text-xs rounded-full"><?= count($professionels) ?></span>
                </h2>
                <a href="/admin/tout/demandes" class="text-blue-900 text-sm font-medium hover:underline">Voir tout</a>
            </div>

            <div class="divide-y divide-gray-100">
                <!-- toutes les demandes -->
                <?php foreach ($professionels as $professionel): ?>
                    <?php 
                        $count++; 
                        if($count == 6):
                            break;
                        endif;
                    ?>
                    <?php $color = $colors[array_rand($colors)]; ?>
                    <div class="p-4 hover:bg-gray-50 transition">
                        <div class="flex items-start justify-between">
                            <div class="flex items-start">
                                <div class="w-12 h-12 <?= $color ?> rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                    <span class="text-blue-900 font-semibold">
                                        <?php
                                        if ($professionel['type'] == 'avocat'):
                                            echo 'A' . strtoupper($professionel['name'][0]);
                                        else:
                                            echo 'H' . strtoupper($professionel['name'][0]);
                                        endif;
                                        ?>
                                    </span>
                                </div>
                                <div>
                                    <p class="font-semibold text-gray-900"><?= $professionel['name'] ?></p>
                                    <p class="text-sm text-gray-500">
                                        <?php if ($professionel['type'] == 'avocat'):
                                            echo $professionel['specialites'];
                                        else:
                                            echo $professionel['type_actes'];
                                        endif;
                                        ?>
                                    </p>
                                    <p class="text-xs text-gray-400 mt-1">
                                        <?= $professionel['type'] ?>
                                    </p>
                                </div>
                            </div>
                            <div class="flex gap-2">
                                <a href="/admin/professional/accept?type=<?= $professionel['type'] ?>&id=<?= $professionel['id'] ?>" class="p-2 bg-green-100 text-green-600 rounded-lg hover:bg-green-200 transition" title="Accepter">
                                    <i class="fas fa-check"></i>
                                </a>
                                <a href="/admin/professional/reject?type=<?= $professionel['type'] ?>&id=<?= $professionel['id'] ?>" class="p-2 bg-red-100 text-red-600 rounded-lg hover:bg-red-200 transition" title="Refuser">
                                    <i class="fas fa-times"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <!-- Footer -->
            <div class="p-4 bg-gray-50 border-t border-gray-100 text-center">
                <a href="/admin/tout/demandes" class="text-blue-900 font-medium hover:underline">
                    Voir toutes les demandes <i class="fas fa-arrow-right ml-1"></i>
                </a>
            </div>
        </div>

        <!-- Prochains Rendez-vous -->
        <div class="bg-white rounded-xl shadow-lg overflow-hidden">
            <div class="p-6 border-b border-gray-200 flex items-center justify-between">
                <h2 class="text-xl font-bold text-gray-900 flex items-center">
                    <i class="fas fa-calendar-alt text-amber-600 mr-2"></i>
                    Prochains Rendez-vous
                </h2>
                <a href="/consultations" class="text-blue-900 text-sm font-medium hover:underline">Voir tout</a>
            </div>

            <div class="divide-y divide-gray-100">
                <!-- RDV Aujourd'hui -->
                <div class="p-4 bg-blue-50 border-l-4 border-blue-900">
                    <div class="flex items-start">
                        <div class="flex-shrink-0 text-center mr-4 bg-blue-900 text-white rounded-lg p-3 min-w-[70px]">
                            <p class="text-xs font-semibold uppercase">Auj.</p>
                            <p class="text-xl font-bold">14:00</p>
                        </div>
                        <div class="flex-grow">
                            <p class="font-semibold text-gray-900">Ahmed Tazi</p>
                            <p class="text-sm text-gray-600">Droit immobilier</p>
                            <div class="flex items-center gap-3 mt-2">
                                <span class="text-xs text-gray-500"><i class="fas fa-clock mr-1"></i>1 heure</span>
                                <span class="px-2 py-0.5 bg-blue-100 text-blue-700 rounded text-xs">Cabinet</span>
                                <span class="px-2 py-0.5 bg-green-100 text-green-700 rounded text-xs">Confirmé</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- RDV Demain - En ligne -->
                <div class="p-4">
                    <div class="flex items-start">
                        <div class="flex-shrink-0 text-center mr-4 bg-gray-100 text-gray-700 rounded-lg p-3 min-w-[70px]">
                            <p class="text-xs font-semibold uppercase">Demain</p>
                            <p class="text-xl font-bold">10:30</p>
                        </div>
                        <div class="flex-grow">
                            <p class="font-semibold text-gray-900">Nadia Chraibi</p>
                            <p class="text-sm text-gray-600">Droit du travail</p>
                            <div class="flex items-center gap-3 mt-2">
                                <span class="text-xs text-gray-500"><i class="fas fa-clock mr-1"></i>45 min</span>
                                <span class="px-2 py-0.5 bg-purple-100 text-purple-700 rounded text-xs">
                                    <i class="fas fa-video mr-1"></i>En ligne
                                </span>
                                <span class="px-2 py-0.5 bg-green-100 text-green-700 rounded text-xs">Confirmé</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- RDV 23 Jan -->
                <div class="p-4">
                    <div class="flex items-start">
                        <div class="flex-shrink-0 text-center mr-4 bg-gray-100 text-gray-700 rounded-lg p-3 min-w-[70px]">
                            <p class="text-xs font-semibold uppercase">23 Jan</p>
                            <p class="text-xl font-bold">16:00</p>
                        </div>
                        <div class="flex-grow">
                            <p class="font-semibold text-gray-900">Rachid Benjelloun</p>
                            <p class="text-sm text-gray-600">Droit des affaires</p>
                            <div class="flex items-center gap-3 mt-2">
                                <span class="text-xs text-gray-500"><i class="fas fa-clock mr-1"></i>1h30</span>
                                <span class="px-2 py-0.5 bg-blue-100 text-blue-700 rounded text-xs">Cabinet</span>
                                <span class="px-2 py-0.5 bg-green-100 text-green-700 rounded text-xs">Confirmé</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- RDV 24 Jan -->
                <div class="p-4">
                    <div class="flex items-start">
                        <div class="flex-shrink-0 text-center mr-4 bg-gray-100 text-gray-700 rounded-lg p-3 min-w-[70px]">
                            <p class="text-xs font-semibold uppercase">24 Jan</p>
                            <p class="text-xl font-bold">09:00</p>
                        </div>
                        <div class="flex-grow">
                            <p class="font-semibold text-gray-900">Leila Mansouri</p>
                            <p class="text-sm text-gray-600">Droit de la famille</p>
                            <div class="flex items-center gap-3 mt-2">
                                <span class="text-xs text-gray-500"><i class="fas fa-clock mr-1"></i>1 heure</span>
                                <span class="px-2 py-0.5 bg-blue-100 text-blue-700 rounded text-xs">Cabinet</span>
                                <span class="px-2 py-0.5 bg-green-100 text-green-700 rounded text-xs">Confirmé</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <div class="p-4 bg-gray-50 border-t border-gray-100 text-center">
                <a href="/consultations" class="text-blue-900 font-medium hover:underline">
                    Voir tous les rendez-vous <i class="fas fa-arrow-right ml-1"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Quick Actions -->
    <div class="bg-white rounded-xl shadow-lg p-6">
        <h2 class="text-xl font-bold text-gray-900 mb-6 flex items-center">
            <i class="fas fa-bolt text-amber-600 mr-2"></i>
            Actions Rapides
        </h2>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <a href="/disponibilites" class="flex flex-col items-center p-6 bg-blue-50 rounded-xl hover:bg-blue-100 transition group">
                <div class="w-14 h-14 bg-blue-900 rounded-full flex items-center justify-center mb-3 group-hover:scale-110 transition">
                    <i class="fas fa-calendar-plus text-white text-xl"></i>
                </div>
                <span class="text-gray-900 font-medium text-center text-sm">Gérer mes disponibilités</span>
            </a>

            <a href="/reservations" class="flex flex-col items-center p-6 bg-amber-50 rounded-xl hover:bg-amber-100 transition group">
                <div class="w-14 h-14 bg-amber-600 rounded-full flex items-center justify-center mb-3 group-hover:scale-110 transition">
                    <i class="fas fa-inbox text-white text-xl"></i>
                </div>
                <span class="text-gray-900 font-medium text-center text-sm">Voir les demandes</span>
            </a>

            <a href="/profile/edit" class="flex flex-col items-center p-6 bg-green-50 rounded-xl hover:bg-green-100 transition group">
                <div class="w-14 h-14 bg-green-600 rounded-full flex items-center justify-center mb-3 group-hover:scale-110 transition">
                    <i class="fas fa-user-edit text-white text-xl"></i>
                </div>
                <span class="text-gray-900 font-medium text-center text-sm">Modifier mon profil</span>
            </a>

            <a href="/consultations/history" class="flex flex-col items-center p-6 bg-purple-50 rounded-xl hover:bg-purple-100 transition group">
                <div class="w-14 h-14 bg-purple-600 rounded-full flex items-center justify-center mb-3 group-hover:scale-110 transition">
                    <i class="fas fa-history text-white text-xl"></i>
                </div>
                <span class="text-gray-900 font-medium text-center text-sm">Historique</span>
            </a>
        </div>
    </div>
</div>