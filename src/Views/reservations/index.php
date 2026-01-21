<div class="py-6 px-4 sm:px-6 lg:px-8">
    <!-- Header -->
    <div class="mb-8 flex flex-col md:flex-row md:items-center md:justify-between">
        <div>
            <h1 class="text-3xl font-bold text-gray-900">Demandes de Consultation</h1>
            <p class="mt-2 text-gray-600">Gérez les demandes de rendez-vous entrantes</p>
        </div>
        
        <!-- Filters -->
        <div class="mt-4 md:mt-0 flex flex-wrap gap-3">
            <select class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-900 focus:border-transparent bg-white">
                <option value="">Tous les statuts</option>
                <option value="pending" selected>En attente</option>
                <option value="confirmed">Confirmées</option>
                <option value="cancelled">Annulées</option>
                <option value="completed">Complétées</option>
            </select>
            <select class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-900 focus:border-transparent bg-white">
                <option value="">Toutes les périodes</option>
                <option value="today">Aujourd'hui</option>
                <option value="week" selected>Cette semaine</option>
                <option value="month">Ce mois</option>
            </select>
        </div>
    </div>

    <!-- Stats Cards -->
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-8">
        <div class="bg-white rounded-xl shadow p-5 flex items-center">
            <div class="w-12 h-12 bg-amber-100 rounded-full flex items-center justify-center mr-4">
                <i class="fas fa-clock text-amber-600 text-xl"></i>
            </div>
            <div>
                <p class="text-2xl font-bold text-gray-900">8</p>
                <p class="text-sm text-gray-500">En attente</p>
            </div>
        </div>
        <div class="bg-white rounded-xl shadow p-5 flex items-center">
            <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mr-4">
                <i class="fas fa-check text-green-600 text-xl"></i>
            </div>
            <div>
                <p class="text-2xl font-bold text-gray-900">24</p>
                <p class="text-sm text-gray-500">Confirmées</p>
            </div>
        </div>
        <div class="bg-white rounded-xl shadow p-5 flex items-center">
            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                <i class="fas fa-calendar-check text-blue-600 text-xl"></i>
            </div>
            <div>
                <p class="text-2xl font-bold text-gray-900">156</p>
                <p class="text-sm text-gray-500">Complétées</p>
            </div>
        </div>
        <div class="bg-white rounded-xl shadow p-5 flex items-center">
            <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center mr-4">
                <i class="fas fa-times text-red-600 text-xl"></i>
            </div>
            <div>
                <p class="text-2xl font-bold text-gray-900">12</p>
                <p class="text-sm text-gray-500">Annulées</p>
            </div>
        </div>
    </div>

    <!-- Pending Requests Section -->
    <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-8">
        <div class="p-6 border-b border-gray-200 bg-amber-50">
            <h2 class="text-xl font-bold text-gray-900 flex items-center">
                <i class="fas fa-bell text-amber-600 mr-2"></i>
                Demandes en Attente
                <span class="ml-2 px-3 py-1 bg-amber-500 text-white text-sm rounded-full">8</span>
            </h2>
        </div>

        <div class="divide-y divide-gray-100">
            <!-- Request 1 -->
            <div class="p-6 hover:bg-gray-50 transition">
                <div class="flex flex-col lg:flex-row lg:items-start lg:justify-between gap-4">
                    <div class="flex items-start flex-grow">
                        <div class="w-14 h-14 bg-blue-100 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                            <span class="text-blue-900 font-bold text-lg">SM</span>
                        </div>
                        <div class="flex-grow">
                            <div class="flex items-center gap-3 mb-1">
                                <h3 class="font-semibold text-gray-900 text-lg">Sara Moussaoui</h3>
                                <span class="px-2 py-0.5 bg-amber-100 text-amber-700 rounded text-xs font-medium">En attente</span>
                            </div>
                            <p class="text-gray-600">
                                <i class="fas fa-briefcase text-amber-600 mr-2"></i>
                                Droit de la famille - Divorce
                            </p>
                            <div class="flex flex-wrap items-center gap-4 mt-3 text-sm text-gray-500">
                                <span>
                                    <i class="fas fa-calendar mr-1 text-blue-900"></i>
                                    25 Janvier 2025
                                </span>
                                <span>
                                    <i class="fas fa-clock mr-1 text-blue-900"></i>
                                    10:00 - 11:00
                                </span>
                                <span class="px-2 py-1 bg-blue-100 text-blue-700 rounded text-xs">
                                    <i class="fas fa-building mr-1"></i>
                                    Au Cabinet
                                </span>
                            </div>
                            <div class="mt-3 p-3 bg-gray-50 rounded-lg">
                                <p class="text-sm text-gray-600">
                                    <i class="fas fa-comment text-gray-400 mr-2"></i>
                                    "Je souhaite discuter des procédures de divorce et de la garde des enfants..."
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 lg:flex-shrink-0">
                        <a href="/reservations/accept?id=1" class="px-5 py-2.5 bg-green-600 text-white rounded-lg font-medium hover:bg-green-700 transition flex items-center">
                            <i class="fas fa-check mr-2"></i>
                            Accepter
                        </a>
                        <a href="/reservations/reject?id=1" class="px-5 py-2.5 bg-white border border-red-300 text-red-600 rounded-lg font-medium hover:bg-red-50 transition flex items-center">
                            <i class="fas fa-times mr-2"></i>
                            Refuser
                        </a>
                    </div>
                </div>
            </div>

            <!-- Request 2 - Urgent + Online -->
            <div class="p-6 hover:bg-gray-50 transition border-l-4 border-red-500">
                <div class="flex flex-col lg:flex-row lg:items-start lg:justify-between gap-4">
                    <div class="flex items-start flex-grow">
                        <div class="w-14 h-14 bg-amber-100 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                            <span class="text-amber-700 font-bold text-lg">KB</span>
                        </div>
                        <div class="flex-grow">
                            <div class="flex items-center gap-3 mb-1">
                                <h3 class="font-semibold text-gray-900 text-lg">Karim Benali</h3>
                                <span class="px-2 py-0.5 bg-red-100 text-red-700 rounded text-xs font-medium">
                                    <i class="fas fa-exclamation-circle mr-1"></i>Urgent
                                </span>
                            </div>
                            <p class="text-gray-600">
                                <i class="fas fa-briefcase text-amber-600 mr-2"></i>
                                Droit pénal - Défense
                            </p>
                            <div class="flex flex-wrap items-center gap-4 mt-3 text-sm text-gray-500">
                                <span>
                                    <i class="fas fa-calendar mr-1 text-blue-900"></i>
                                    26 Janvier 2025
                                </span>
                                <span>
                                    <i class="fas fa-clock mr-1 text-blue-900"></i>
                                    14:30 - 15:30
                                </span>
                                <span class="px-2 py-1 bg-purple-100 text-purple-700 rounded text-xs">
                                    <i class="fas fa-video mr-1"></i>
                                    En Ligne
                                </span>
                            </div>
                            <div class="mt-3 p-3 bg-gray-50 rounded-lg">
                                <p class="text-sm text-gray-600">
                                    <i class="fas fa-comment text-gray-400 mr-2"></i>
                                    "J'ai besoin de conseils urgents concernant une convocation au tribunal..."
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 lg:flex-shrink-0">
                        <a href="/reservations/accept?id=2" class="px-5 py-2.5 bg-green-600 text-white rounded-lg font-medium hover:bg-green-700 transition flex items-center">
                            <i class="fas fa-check mr-2"></i>
                            Accepter
                        </a>
                        <a href="/reservations/reject?id=2" class="px-5 py-2.5 bg-white border border-red-300 text-red-600 rounded-lg font-medium hover:bg-red-50 transition flex items-center">
                            <i class="fas fa-times mr-2"></i>
                            Refuser
                        </a>
                    </div>
                </div>
            </div>

            <!-- Request 3 -->
            <div class="p-6 hover:bg-gray-50 transition">
                <div class="flex flex-col lg:flex-row lg:items-start lg:justify-between gap-4">
                    <div class="flex items-start flex-grow">
                        <div class="w-14 h-14 bg-green-100 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                            <span class="text-green-700 font-bold text-lg">FE</span>
                        </div>
                        <div class="flex-grow">
                            <div class="flex items-center gap-3 mb-1">
                                <h3 class="font-semibold text-gray-900 text-lg">Fatima El Idrissi</h3>
                                <span class="px-2 py-0.5 bg-amber-100 text-amber-700 rounded text-xs font-medium">En attente</span>
                            </div>
                            <p class="text-gray-600">
                                <i class="fas fa-briefcase text-amber-600 mr-2"></i>
                                Droit des affaires - Création SARL
                            </p>
                            <div class="flex flex-wrap items-center gap-4 mt-3 text-sm text-gray-500">
                                <span>
                                    <i class="fas fa-calendar mr-1 text-blue-900"></i>
                                    27 Janvier 2025
                                </span>
                                <span>
                                    <i class="fas fa-clock mr-1 text-blue-900"></i>
                                    09:00 - 10:00
                                </span>
                                <span class="px-2 py-1 bg-blue-100 text-blue-700 rounded text-xs">
                                    <i class="fas fa-building mr-1"></i>
                                    Au Cabinet
                                </span>
                            </div>
                            <div class="mt-3 p-3 bg-gray-50 rounded-lg">
                                <p class="text-sm text-gray-600">
                                    <i class="fas fa-comment text-gray-400 mr-2"></i>
                                    "Je voudrais créer une SARL et j'ai besoin de conseils sur les statuts..."
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 lg:flex-shrink-0">
                        <a href="/reservations/accept?id=3" class="px-5 py-2.5 bg-green-600 text-white rounded-lg font-medium hover:bg-green-700 transition flex items-center">
                            <i class="fas fa-check mr-2"></i>
                            Accepter
                        </a>
                        <a href="/reservations/reject?id=3" class="px-5 py-2.5 bg-white border border-red-300 text-red-600 rounded-lg font-medium hover:bg-red-50 transition flex items-center">
                            <i class="fas fa-times mr-2"></i>
                            Refuser
                        </a>
                    </div>
                </div>
            </div>

            <!-- Request 4 -->
            <div class="p-6 hover:bg-gray-50 transition">
                <div class="flex flex-col lg:flex-row lg:items-start lg:justify-between gap-4">
                    <div class="flex items-start flex-grow">
                        <div class="w-14 h-14 bg-purple-100 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                            <span class="text-purple-700 font-bold text-lg">YA</span>
                        </div>
                        <div class="flex-grow">
                            <div class="flex items-center gap-3 mb-1">
                                <h3 class="font-semibold text-gray-900 text-lg">Youssef Amrani</h3>
                                <span class="px-2 py-0.5 bg-amber-100 text-amber-700 rounded text-xs font-medium">En attente</span>
                            </div>
                            <p class="text-gray-600">
                                <i class="fas fa-briefcase text-amber-600 mr-2"></i>
                                Droit immobilier - Litige locatif
                            </p>
                            <div class="flex flex-wrap items-center gap-4 mt-3 text-sm text-gray-500">
                                <span>
                                    <i class="fas fa-calendar mr-1 text-blue-900"></i>
                                    28 Janvier 2025
                                </span>
                                <span>
                                    <i class="fas fa-clock mr-1 text-blue-900"></i>
                                    11:00 - 12:00
                                </span>
                                <span class="px-2 py-1 bg-blue-100 text-blue-700 rounded text-xs">
                                    <i class="fas fa-building mr-1"></i>
                                    Au Cabinet
                                </span>
                            </div>
                            <div class="mt-3 p-3 bg-gray-50 rounded-lg">
                                <p class="text-sm text-gray-600">
                                    <i class="fas fa-comment text-gray-400 mr-2"></i>
                                    "Mon locataire ne paie plus le loyer depuis 3 mois..."
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 lg:flex-shrink-0">
                        <a href="/reservations/accept?id=4" class="px-5 py-2.5 bg-green-600 text-white rounded-lg font-medium hover:bg-green-700 transition flex items-center">
                            <i class="fas fa-check mr-2"></i>
                            Accepter
                        </a>
                        <a href="/reservations/reject?id=4" class="px-5 py-2.5 bg-white border border-red-300 text-red-600 rounded-lg font-medium hover:bg-red-50 transition flex items-center">
                            <i class="fas fa-times mr-2"></i>
                            Refuser
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Confirmed Reservations Table -->
    <div class="bg-white rounded-xl shadow-lg overflow-hidden">
        <div class="p-6 border-b border-gray-200">
            <h2 class="text-xl font-bold text-gray-900 flex items-center">
                <i class="fas fa-calendar-check text-green-600 mr-2"></i>
                Rendez-vous Confirmés
            </h2>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full min-w-[800px]">
                <thead class="bg-gray-50 border-b border-gray-200">
                    <tr>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Client</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Date & Heure</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Type</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Motif</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Statut</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    <!-- Row 1 - Today -->
                    <tr class="hover:bg-blue-50 bg-blue-50/50">
                        <td class="px-6 py-4">
                            <div class="flex items-center">
                                <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center mr-3">
                                    <span class="text-blue-900 font-semibold text-sm">AT</span>
                                </div>
                                <div>
                                    <p class="font-medium text-gray-900">Ahmed Tazi</p>
                                    <p class="text-sm text-gray-500">ahmed.tazi@email.com</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <p class="font-semibold text-blue-900">Aujourd'hui</p>
                            <p class="text-sm text-gray-500">14:00 - 15:00</p>
                        </td>
                        <td class="px-6 py-4">
                            <span class="px-3 py-1 bg-blue-100 text-blue-700 rounded-lg text-sm font-medium">
                                <i class="fas fa-building mr-1"></i>Cabinet
                            </span>
                        </td>
                        <td class="px-6 py-4 text-gray-600">Droit immobilier</td>
                        <td class="px-6 py-4">
                            <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-sm font-medium">
                                <i class="fas fa-check-circle mr-1"></i>Confirmé
                            </span>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex gap-2">
                                <a href="/reservations/view?id=5" class="p-2 text-blue-600 hover:bg-blue-100 rounded-lg transition" title="Voir">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="/reservations/cancel?id=5" class="p-2 text-red-600 hover:bg-red-100 rounded-lg transition" title="Annuler">
                                    <i class="fas fa-times"></i>
                                </a>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 2 - Tomorrow Online -->
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4">
                            <div class="flex items-center">
                                <div class="w-10 h-10 bg-purple-100 rounded-full flex items-center justify-center mr-3">
                                    <span class="text-purple-700 font-semibold text-sm">NC</span>
                                </div>
                                <div>
                                    <p class="font-medium text-gray-900">Nadia Chraibi</p>
                                    <p class="text-sm text-gray-500">nadia.chraibi@email.com</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <p class="font-medium text-gray-900">Demain</p>
                            <p class="text-sm text-gray-500">10:30 - 11:15</p>
                        </td>
                        <td class="px-6 py-4">
                            <span class="px-3 py-1 bg-purple-100 text-purple-700 rounded-lg text-sm font-medium">
                                <i class="fas fa-video mr-1"></i>En ligne
                            </span>
                        </td>
                        <td class="px-6 py-4 text-gray-600">Droit du travail</td>
                        <td class="px-6 py-4">
                            <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-sm font-medium">
                                <i class="fas fa-check-circle mr-1"></i>Confirmé
                            </span>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex gap-2">
                                <a href="/reservations/view?id=6" class="p-2 text-blue-600 hover:bg-blue-100 rounded-lg transition" title="Voir">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="#" class="p-2 text-purple-600 hover:bg-purple-100 rounded-lg transition" title="Lien Meet">
                                    <i class="fas fa-video"></i>
                                </a>
                                <a href="/reservations/cancel?id=6" class="p-2 text-red-600 hover:bg-red-100 rounded-lg transition" title="Annuler">
                                    <i class="fas fa-times"></i>
                                </a>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 3 -->
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4">
                            <div class="flex items-center">
                                <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center mr-3">
                                    <span class="text-green-700 font-semibold text-sm">RB</span>
                                </div>
                                <div>
                                    <p class="font-medium text-gray-900">Rachid Benjelloun</p>
                                    <p class="text-sm text-gray-500">rachid.b@email.com</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <p class="font-medium text-gray-900">23 Jan 2025</p>
                            <p class="text-sm text-gray-500">16:00 - 17:30</p>
                        </td>
                        <td class="px-6 py-4">
                            <span class="px-3 py-1 bg-blue-100 text-blue-700 rounded-lg text-sm font-medium">
                                <i class="fas fa-building mr-1"></i>Cabinet
                            </span>
                        </td>
                        <td class="px-6 py-4 text-gray-600">Droit des affaires</td>
                        <td class="px-6 py-4">
                            <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-sm font-medium">
                                <i class="fas fa-check-circle mr-1"></i>Confirmé
                            </span>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex gap-2">
                                <a href="/reservations/view?id=7" class="p-2 text-blue-600 hover:bg-blue-100 rounded-lg transition" title="Voir">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="/reservations/cancel?id=7" class="p-2 text-red-600 hover:bg-red-100 rounded-lg transition" title="Annuler">
                                    <i class="fas fa-times"></i>
                                </a>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 4 -->
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4">
                            <div class="flex items-center">
                                <div class="w-10 h-10 bg-amber-100 rounded-full flex items-center justify-center mr-3">
                                    <span class="text-amber-700 font-semibold text-sm">LM</span>
                                </div>
                                <div>
                                    <p class="font-medium text-gray-900">Leila Mansouri</p>
                                    <p class="text-sm text-gray-500">leila.m@email.com</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <p class="font-medium text-gray-900">24 Jan 2025</p>
                            <p class="text-sm text-gray-500">09:00 - 10:00</p>
                        </td>
                        <td class="px-6 py-4">
                            <span class="px-3 py-1 bg-blue-100 text-blue-700 rounded-lg text-sm font-medium">
                                <i class="fas fa-building mr-1"></i>Cabinet
                            </span>
                        </td>
                        <td class="px-6 py-4 text-gray-600">Droit de la famille</td>
                        <td class="px-6 py-4">
                            <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-sm font-medium">
                                <i class="fas fa-check-circle mr-1"></i>Confirmé
                            </span>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex gap-2">
                                <a href="/reservations/view?id=8" class="p-2 text-blue-600 hover:bg-blue-100 rounded-lg transition" title="Voir">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="/reservations/cancel?id=8" class="p-2 text-red-600 hover:bg-red-100 rounded-lg transition" title="Annuler">
                                    <i class="fas fa-times"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="bg-gray-50 px-6 py-4 border-t border-gray-200">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                <p class="text-sm text-gray-600">
                    Affichage de <span class="font-medium">1</span> à <span class="font-medium">4</span> sur <span class="font-medium">24</span> résultats
                </p>
                <div class="flex items-center gap-2">
                    <a href="#" class="px-4 py-2 border border-gray-300 rounded-lg text-gray-500 bg-gray-100 cursor-not-allowed">
                        <i class="fas fa-arrow-left mr-1"></i> Précédent
                    </a>
                    <a href="?page=1" class="px-4 py-2 bg-blue-900 text-white rounded-lg font-medium">1</a>
                    <a href="?page=2" class="px-4 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50">2</a>
                    <a href="?page=3" class="px-4 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50">3</a>
                    <a href="?page=2" class="px-4 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50">
                        Suivant <i class="fas fa-arrow-right ml-1"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>