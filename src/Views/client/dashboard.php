<div class="py-6 px-4 sm:px-6 lg:px-8">

    <!-- Header -->
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-900">Bienvenue, Anouar 👋</h1>
        <p class="mt-2 text-gray-600">Voici votre espace client ISTICHARA</p>
    </div>

    <!-- Stats Client -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">

        <!-- Total Demandes -->
        <div class="stat-card">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-blue-100 text-sm">Mes Demandes</p>
                    <p class="text-3xl font-bold mt-2">12</p>
                    <p class="text-blue-200 text-xs mt-2">
                        <i class="fas fa-clock mr-1"></i>
                        3 en attente
                    </p>
                </div>
                <div class="w-14 h-14 bg-white/20 rounded-full flex items-center justify-center">
                    <i class="fas fa-file-alt text-2xl text-white"></i>
                </div>
            </div>
        </div>

        <!-- Consultations Terminées -->
        <div class="stat-card">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-blue-100 text-sm">Consultations</p>
                    <p class="text-3xl font-bold mt-2">8</p>
                    <p class="text-green-300 text-xs mt-2">
                        <i class="fas fa-check mr-1"></i>
                        5 terminées
                    </p>
                </div>
                <div class="w-14 h-14 bg-white/20 rounded-full flex items-center justify-center">
                    <i class="fas fa-comments text-2xl text-white"></i>
                </div>
            </div>
        </div>

        <!-- Avocats Contactés -->
        <div class="stat-card">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-blue-100 text-sm">Avocats contactés</p>
                    <p class="text-3xl font-bold mt-2">6</p>
                    <p class="text-blue-200 text-xs mt-2">
                        <i class="fas fa-user-tie mr-1"></i>
                        différents domaines
                    </p>
                </div>
                <div class="w-14 h-14 bg-white/20 rounded-full flex items-center justify-center">
                    <i class="fas fa-balance-scale text-2xl text-white"></i>
                </div>
            </div>
        </div>

    </div>

    <!-- Two Columns -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">

        <!-- Mes Demandes Récentes -->
        <div class="bg-white rounded-xl shadow-lg p-6">
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-xl font-bold text-gray-900 flex items-center">
                    <i class="fas fa-inbox text-amber-600 mr-2"></i>
                    Mes Demandes Récentes
                </h2>
                <a href="/client/demandes" class="text-blue-900 text-sm hover:underline">Voir tout</a>
            </div>

            <div class="space-y-4">

                <!-- Demande -->
                <div class="p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition">
                    <p class="font-semibold text-gray-900">Droit de la famille</p>
                    <p class="text-sm text-gray-500">Envoyée à Me. Alami Mohamed</p>
                    <div class="flex justify-between mt-2 text-xs text-gray-400">
                        <span><i class="fas fa-calendar mr-1"></i>22 Jan 2026</span>
                        <span class="text-amber-600 font-medium">En attente</span>
                    </div>
                </div>

                <div class="p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition">
                    <p class="font-semibold text-gray-900">Droit pénal</p>
                    <p class="text-sm text-gray-500">Me. Karim Benali</p>
                    <div class="flex justify-between mt-2 text-xs text-gray-400">
                        <span><i class="fas fa-calendar mr-1"></i>20 Jan 2026</span>
                        <span class="text-green-600 font-medium">Acceptée</span>
                    </div>
                </div>

            </div>
        </div>

        <!-- Liste des Avocats -->
        <div class="bg-white rounded-xl shadow-lg p-6">
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-xl font-bold text-gray-900 flex items-center">
                    <i class="fas fa-user-tie text-amber-600 mr-2"></i>
                    Avocats Recommandés
                </h2>
                <a href="/avocats" class="text-blue-900 text-sm hover:underline">Voir tous</a>
            </div>

            <div class="space-y-4">

                <!-- Avocat -->
                <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition">
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                            <span class="text-blue-900 font-semibold">AM</span>
                        </div>
                        <div>
                            <p class="font-semibold text-gray-900">Me. Alami Mohamed</p>
                            <p class="text-sm text-gray-500">Droit de la famille</p>
                        </div>
                    </div>
                    <a href="/avocats/1" class="text-blue-900 text-sm hover:underline">Voir profil</a>
                </div>

                <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition">
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-amber-100 rounded-full flex items-center justify-center mr-4">
                            <span class="text-amber-700 font-semibold">KB</span>
                        </div>
                        <div>
                            <p class="font-semibold text-gray-900">Me. Karim Benali</p>
                            <p class="text-sm text-gray-500">Droit pénal</p>
                        </div>
                    </div>
                    <a href="/avocats/2" class="text-blue-900 text-sm hover:underline">Voir profil</a>
                </div>

            </div>
        </div>

    </div>

    <!-- Historique -->
    <div class="bg-white rounded-xl shadow-lg p-6 mb-8">
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-xl font-bold text-gray-900 flex items-center">
                <i class="fas fa-history text-amber-600 mr-2"></i>
                Historique de mes demandes
            </h2>
            <a href="/client/historique" class="text-blue-900 text-sm hover:underline">Voir tout</a>
        </div>

        <div class="space-y-3">
            <div class="flex justify-between p-3 bg-gray-50 rounded">
                <span>Droit immobilier - Me. Tazi</span>
                <span class="text-green-600 text-sm font-medium">Terminée</span>
            </div>
            <div class="flex justify-between p-3 bg-gray-50 rounded">
                <span>Droit du travail - Me. Chraibi</span>
                <span class="text-red-600 text-sm font-medium">Refusée</span>
            </div>
        </div>
    </div>

    <!-- Actions Rapides -->
    <div class="bg-white rounded-xl shadow-lg p-6">
        <h2 class="text-xl font-bold text-gray-900 mb-6 flex items-center">
            <i class="fas fa-bolt text-amber-600 mr-2"></i>
            Actions Rapides
        </h2>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">

            <a href="/avocats" class="flex flex-col items-center p-6 bg-blue-50 rounded-xl hover:bg-blue-100 transition">
                <i class="fas fa-user-tie text-2xl text-blue-900 mb-2"></i>
                <span class="font-medium">Voir les avocats</span>
            </a>

            <a href="/demande/new" class="flex flex-col items-center p-6 bg-amber-50 rounded-xl hover:bg-amber-100 transition">
                <i class="fas fa-plus-circle text-2xl text-amber-600 mb-2"></i>
                <span class="font-medium">Nouvelle demande</span>
            </a>

            <a href="/client/demandes" class="flex flex-col items-center p-6 bg-green-50 rounded-xl hover:bg-green-100 transition">
                <i class="fas fa-inbox text-2xl text-green-600 mb-2"></i>
                <span class="font-medium">Mes demandes</span>
            </a>

            <a href="/client/historique" class="flex flex-col items-center p-6 bg-purple-50 rounded-xl hover:bg-purple-100 transition">
                <i class="fas fa-history text-2xl text-purple-600 mb-2"></i>
                <span class="font-medium">Historique</span>
            </a>

        </div>
    </div>
</div>