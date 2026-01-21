<div class="py-6 px-4 sm:px-6 lg:px-8">
    <!-- Welcome Header -->
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-900">Bienvenue, Me. Alami Mohamed</h1>
        <p class="mt-2 text-gray-600">Voici un aperçu de votre activité sur ISTICHARA</p>
    </div>

    <!-- Stats Cards -->
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

    <!-- Profile Visibility Card -->
    <div class="bg-gradient-to-r from-amber-500 to-amber-600 rounded-2xl p-6 mb-8 text-white shadow-lg">
        <div class="flex items-center justify-between">
            <div>
                <h3 class="text-lg font-semibold flex items-center">
                    <i class="fas fa-eye mr-2"></i>
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

    <!-- Two Columns -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
        <!-- Demandes Récentes -->
        <div class="bg-white rounded-xl shadow-lg p-6">
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-xl font-bold text-gray-900 flex items-center">
                    <i class="fas fa-bell text-amber-600 mr-2"></i>
                    Demandes en Attente
                </h2>
                <a href="/demandes" class="text-blue-900 text-sm hover:underline">Voir tout</a>
            </div>

            <div class="space-y-4">
                <!-- Demande 1 -->
                <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition">
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                            <span class="text-blue-900 font-semibold">SM</span>
                        </div>
                        <div>
                            <p class="font-semibold text-gray-900">Sara Moussaoui</p>
                            <p class="text-sm text-gray-500">Consultation - Droit de la famille</p>
                            <p class="text-xs text-gray-400 mt-1">
                                <i class="fas fa-calendar mr-1"></i>
                                Demandé pour le 25 Jan 2025 à 10:00
                            </p>
                        </div>
                    </div>
                    <div class="flex gap-2">
                        <button class="p-2 bg-green-100 text-green-600 rounded-lg hover:bg-green-200 transition" title="Accepter">
                            <i class="fas fa-check"></i>
                        </button>
                        <button class="p-2 bg-red-100 text-red-600 rounded-lg hover:bg-red-200 transition" title="Refuser">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>

                <!-- Demande 2 -->
                <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition">
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-amber-100 rounded-full flex items-center justify-center mr-4">
                            <span class="text-amber-700 font-semibold">KB</span>
                        </div>
                        <div>
                            <p class="font-semibold text-gray-900">Karim Benali</p>
                            <p class="text-sm text-gray-500">Consultation en ligne - Droit pénal</p>
                            <p class="text-xs text-gray-400 mt-1">
                                <i class="fas fa-calendar mr-1"></i>
                                Demandé pour le 26 Jan 2025 à 14:30
                            </p>
                        </div>
                    </div>
                    <div class="flex gap-2">
                        <button class="p-2 bg-green-100 text-green-600 rounded-lg hover:bg-green-200 transition" title="Accepter">
                            <i class="fas fa-check"></i>
                        </button>
                        <button class="p-2 bg-red-100 text-red-600 rounded-lg hover:bg-red-200 transition" title="Refuser">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>

                <!-- Demande 3 -->
                <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition">
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mr-4">
                            <span class="text-green-700 font-semibold">FE</span>
                        </div>
                        <div>
                            <p class="font-semibold text-gray-900">Fatima El Idrissi</p>
                            <p class="text-sm text-gray-500">Consultation - Droit des affaires</p>
                            <p class="text-xs text-gray-400 mt-1">
                                <i class="fas fa-calendar mr-1"></i>
                                Demandé pour le 27 Jan 2025 à 09:00
                            </p>
                        </div>
                    </div>
                    <div class="flex gap-2">
                        <button class="p-2 bg-green-100 text-green-600 rounded-lg hover:bg-green-200 transition" title="Accepter">
                            <i class="fas fa-check"></i>
                        </button>
                        <button class="p-2 bg-red-100 text-red-600 rounded-lg hover:bg-red-200 transition" title="Refuser">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Prochains Rendez-vous -->
        <div class="bg-white rounded-xl shadow-lg p-6">
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-xl font-bold text-gray-900 flex items-center">
                    <i class="fas fa-calendar-alt text-amber-600 mr-2"></i>
                    Prochains Rendez-vous
                </h2>
                <a href="/consultations" class="text-blue-900 text-sm hover:underline">Voir tout</a>
            </div>

            <div class="space-y-4">
                <!-- RDV 1 - Aujourd'hui -->
                <div class="flex items-start p-4 bg-blue-50 border-l-4 border-blue-900 rounded-lg">
                    <div class="flex-shrink-0 text-center mr-4">
                        <p class="text-xs text-blue-600 font-semibold uppercase">Aujourd'hui</p>
                        <p class="text-2xl font-bold text-blue-900">14:00</p>
                    </div>
                    <div class="flex-grow">
                        <p class="font-semibold text-gray-900">Ahmed Tazi</p>
                        <p class="text-sm text-gray-600">Droit immobilier - Cabinet</p>
                        <div class="flex items-center mt-2 text-xs text-gray-500">
                            <i class="fas fa-clock mr-1"></i>
                            <span>1 heure</span>
                            <span class="mx-2">•</span>
                            <span class="text-green-600 font-medium">Confirmé</span>
                        </div>
                    </div>
                </div>

                <!-- RDV 2 - Demain -->
                <div class="flex items-start p-4 bg-gray-50 border-l-4 border-gray-300 rounded-lg">
                    <div class="flex-shrink-0 text-center mr-4">
                        <p class="text-xs text-gray-500 font-semibold uppercase">Demain</p>
                        <p class="text-2xl font-bold text-gray-700">10:30</p>
                    </div>
                    <div class="flex-grow">
                        <p class="font-semibold text-gray-900">Nadia Chraibi</p>
                        <p class="text-sm text-gray-600">Droit du travail - En ligne</p>
                        <div class="flex items-center mt-2 text-xs text-gray-500">
                            <i class="fas fa-video mr-1 text-blue-600"></i>
                            <span>Google Meet</span>
                            <span class="mx-2">•</span>
                            <span>45 min</span>
                        </div>
                    </div>
                </div>

                <!-- RDV 3 -->
                <div class="flex items-start p-4 bg-gray-50 border-l-4 border-gray-300 rounded-lg">
                    <div class="flex-shrink-0 text-center mr-4">
                        <p class="text-xs text-gray-500 font-semibold uppercase">23 Jan</p>
                        <p class="text-2xl font-bold text-gray-700">16:00</p>
                    </div>
                    <div class="flex-grow">
                        <p class="font-semibold text-gray-900">Youssef Amrani</p>
                        <p class="text-sm text-gray-600">Droit des affaires - Cabinet</p>
                        <div class="flex items-center mt-2 text-xs text-gray-500">
                            <i class="fas fa-clock mr-1"></i>
                            <span>1h30</span>
                            <span class="mx-2">•</span>
                            <span class="text-green-600 font-medium">Confirmé</span>
                        </div>
                    </div>
                </div>
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
                <span class="text-gray-900 font-medium text-center">Gérer mes disponibilités</span>
            </a>
            
            <a href="/demandes" class="flex flex-col items-center p-6 bg-amber-50 rounded-xl hover:bg-amber-100 transition group">
                <div class="w-14 h-14 bg-amber-600 rounded-full flex items-center justify-center mb-3 group-hover:scale-110 transition">
                    <i class="fas fa-inbox text-white text-xl"></i>
                </div>
                <span class="text-gray-900 font-medium text-center">Voir les demandes</span>
            </a>
            
            <a href="/profile" class="flex flex-col items-center p-6 bg-green-50 rounded-xl hover:bg-green-100 transition group">
                <div class="w-14 h-14 bg-green-600 rounded-full flex items-center justify-center mb-3 group-hover:scale-110 transition">
                    <i class="fas fa-user-edit text-white text-xl"></i>
                </div>
                <span class="text-gray-900 font-medium text-center">Modifier mon profil</span>
            </a>
            
            <a href="/consultations/history" class="flex flex-col items-center p-6 bg-purple-50 rounded-xl hover:bg-purple-100 transition group">
                <div class="w-14 h-14 bg-purple-600 rounded-full flex items-center justify-center mb-3 group-hover:scale-110 transition">
                    <i class="fas fa-history text-white text-xl"></i>
                </div>
                <span class="text-gray-900 font-medium text-center">Historique</span>
            </a>
        </div>
    </div>
</div>