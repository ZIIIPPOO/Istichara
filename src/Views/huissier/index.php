<div class="py-6 px-4 sm:px-6 lg:px-8">
    <!-- Header -->
    <div class="mb-6 flex justify-between items-center">
        <div>
            <h1 class="text-3xl font-bold text-gray-900">Liste des Huissiers de Justice</h1>
            <p class="mt-2 text-sm text-gray-600">Gérez tous les huissiers inscrits sur la plateforme</p>
        </div>
        <a href="/huissier/create" class="btn-action btn-primary">
            <i class="fas fa-plus"></i>
            Ajouter un Huissier
        </a>
    </div>

    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
        <div class="stat-card">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-blue-100 text-sm">Total Huissiers</p>
                    <p class="text-3xl font-bold mt-1">30</p>
                </div>
                <i class="fas fa-gavel text-4xl opacity-20"></i>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow p-4">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500 text-sm">Actifs</p>
                    <p class="text-2xl font-bold text-green-600 mt-1">28</p>
                </div>
                <i class="fas fa-check-circle text-3xl text-green-600 opacity-20"></i>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow p-4">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500 text-sm">Actes ce mois</p>
                    <p class="text-2xl font-bold text-amber-600 mt-1">156</p>
                </div>
                <i class="fas fa-file-invoice text-3xl text-amber-600 opacity-20"></i>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow p-4">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500 text-sm">Nouveau ce mois</p>
                    <p class="text-2xl font-bold text-blue-900 mt-1">3</p>
                </div>
                <i class="fas fa-arrow-trend-up text-3xl text-blue-900 opacity-20"></i>
            </div>
        </div>
    </div>

    <!-- Table -->
    <div class="bg-white rounded-lg shadow overflow-hidden">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nom Complet</th>
                        <th>Email</th>
                        <th>Ville</th>
                        <th>Types d'Actes</th>
                        <th>Expérience</th>
                        <th>Tarif/acte</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#H001</td>
                        <td>
                            <div class="flex items-center">
                                <div class="h-10 w-10 rounded-full bg-blue-900 flex items-center justify-center text-white font-semibold mr-3">
                                    KE
                                </div>
                                <div>
                                    <p class="font-semibold text-gray-900">Karim El Fassi</p>
                                    <p class="text-xs text-gray-500">Huissier de Justice</p>
                                </div>
                            </div>
                        </td>
                        <td>karim.elfassi@example.com</td>
                        <td>Marrakech</td>
                        <td>
                            <span class="badge badge-primary">Signification</span>
                        </td>
                        <td>8 ans</td>
                        <td class="font-semibold text-blue-900">800 DH</td>
                        <td>
                            <div class="flex gap-2">
                                <a href="/huissier/edit?id=1" class="text-blue-600 hover:text-blue-800">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="/huissier/delete?id=1" class="text-red-600 hover:text-red-800" onclick="return confirm('Êtes-vous sûr ?')">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>#H002</td>
                        <td>
                            <div class="flex items-center">
                                <div class="h-10 w-10 rounded-full bg-blue-900 flex items-center justify-center text-white font-semibold mr-3">
                                    NM
                                </div>
                                <div>
                                    <p class="font-semibold text-gray-900">Nadia Mansouri</p>
                                    <p class="text-xs text-gray-500">Huissière de Justice</p>
                                </div>
                            </div>
                        </td>
                        <td>nadia.mansouri@example.com</td>
                        <td>Fès</td>
                        <td>
                            <span class="badge badge-primary">Exécution</span>
                        </td>
                        <td>12 ans</td>
                        <td class="font-semibold text-blue-900">850 DH</td>
                        <td>
                            <div class="flex gap-2">
                                <a href="/huissier/edit?id=2" class="text-blue-600 hover:text-blue-800">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="/huissier/delete?id=2" class="text-red-600 hover:text-red-800" onclick="return confirm('Êtes-vous sûr ?')">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="bg-gray-50 px-4 py-3 border-t border-gray-200 sm:px-6">
            <div class="flex items-center justify-between">
                <div class="text-sm text-gray-700">
                    Affichage de <span class="font-medium">1</span> à <span class="font-medium">2</span> sur <span class="font-medium">30</span> résultats
                </div>
                <div>
                    <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px">
                        <button class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <button class="bg-blue-900 border-blue-900 text-white relative inline-flex items-center px-4 py-2 border text-sm font-medium">1</button>
                        <button class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">2</button>
                        <button class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>