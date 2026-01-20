<div class="py-6 px-4 sm:px-6 lg:px-8">
    <!-- Header -->
    <div class="mb-8 flex flex-col md:flex-row md:items-center md:justify-between">
        <div>
            <h1 class="text-3xl font-bold text-gray-900">Gestion des Disponibilités</h1>
            <p class="mt-2 text-gray-600">Configurez votre emploi du temps hebdomadaire</p>
        </div>
        <div class="mt-4 md:mt-0">
            <a href="/disponibilites/create" class="btn-action btn-primary">
                <i class="fas fa-plus mr-2"></i>
                Ajouter un Créneau
            </a>
        </div>
    </div>

    <!-- Weekly Calendar Grid -->
    <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-8">
        <div class="p-6 border-b border-gray-200">
            <h2 class="text-xl font-bold text-gray-900 flex items-center">
                <i class="fas fa-calendar-week text-amber-600 mr-2"></i>
                Vue Hebdomadaire
            </h2>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full min-w-[900px]">
                <thead>
                    <tr class="bg-gray-50 border-b border-gray-200">
                        <th class="py-4 px-4 text-left text-sm font-semibold text-gray-600 w-24">Heure</th>
                        <th class="py-4 px-4 text-center text-sm font-semibold text-blue-900">Lundi</th>
                        <th class="py-4 px-4 text-center text-sm font-semibold text-blue-900">Mardi</th>
                        <th class="py-4 px-4 text-center text-sm font-semibold text-blue-900">Mercredi</th>
                        <th class="py-4 px-4 text-center text-sm font-semibold text-blue-900">Jeudi</th>
                        <th class="py-4 px-4 text-center text-sm font-semibold text-blue-900">Vendredi</th>
                        <th class="py-4 px-4 text-center text-sm font-semibold text-gray-500">Samedi</th>
                        <th class="py-4 px-4 text-center text-sm font-semibold text-gray-500">Dimanche</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- 08:00 -->
                    <tr class="border-b border-gray-100">
                        <td class="py-2 px-4 text-sm text-gray-500 font-medium bg-gray-50">08:00</td>
                        <td class="py-2 px-2">
                            <div class="h-14 bg-green-100 border-2 border-green-400 rounded-lg flex items-center justify-center">
                                <span class="text-xs font-semibold text-green-700">08:00 - 09:00</span>
                            </div>
                        </td>
                        <td class="py-2 px-2">
                            <a href="/disponibilites/create?jour=mardi&heure=08:00" class="block h-14 bg-gray-50 border-2 border-dashed border-gray-300 rounded-lg flex items-center justify-center hover:bg-blue-50 hover:border-blue-300 transition">
                                <i class="fas fa-plus text-gray-400"></i>
                            </a>
                        </td>
                        <td class="py-2 px-2">
                            <div class="h-14 bg-green-100 border-2 border-green-400 rounded-lg flex items-center justify-center">
                                <span class="text-xs font-semibold text-green-700">08:00 - 09:00</span>
                            </div>
                        </td>
                        <td class="py-2 px-2">
                            <a href="/disponibilites/create?jour=jeudi&heure=08:00" class="block h-14 bg-gray-50 border-2 border-dashed border-gray-300 rounded-lg flex items-center justify-center hover:bg-blue-50 hover:border-blue-300 transition">
                                <i class="fas fa-plus text-gray-400"></i>
                            </a>
                        </td>
                        <td class="py-2 px-2">
                            <div class="h-14 bg-green-100 border-2 border-green-400 rounded-lg flex items-center justify-center">
                                <span class="text-xs font-semibold text-green-700">08:00 - 10:00</span>
                            </div>
                        </td>
                        <td class="py-2 px-2">
                            <div class="h-14 bg-gray-100 border border-gray-200 rounded-lg flex items-center justify-center">
                                <span class="text-xs text-gray-400">Fermé</span>
                            </div>
                        </td>
                        <td class="py-2 px-2">
                            <div class="h-14 bg-gray-100 border border-gray-200 rounded-lg flex items-center justify-center">
                                <span class="text-xs text-gray-400">Fermé</span>
                            </div>
                        </td>
                    </tr>

                    <!-- 09:00 -->
                    <tr class="border-b border-gray-100">
                        <td class="py-2 px-4 text-sm text-gray-500 font-medium bg-gray-50">09:00</td>
                        <td class="py-2 px-2">
                            <div class="h-14 bg-green-100 border-2 border-green-400 rounded-lg flex items-center justify-center">
                                <span class="text-xs font-semibold text-green-700">09:00 - 12:00</span>
                            </div>
                        </td>
                        <td class="py-2 px-2">
                            <div class="h-14 bg-green-100 border-2 border-green-400 rounded-lg flex items-center justify-center">
                                <span class="text-xs font-semibold text-green-700">09:00 - 12:00</span>
                            </div>
                        </td>
                        <td class="py-2 px-2">
                            <div class="h-14 bg-green-100 border-2 border-green-400 rounded-lg flex items-center justify-center">
                                <span class="text-xs font-semibold text-green-700">09:00 - 12:00</span>
                            </div>
                        </td>
                        <td class="py-2 px-2">
                            <div class="h-14 bg-green-100 border-2 border-green-400 rounded-lg flex items-center justify-center">
                                <span class="text-xs font-semibold text-green-700">09:00 - 12:00</span>
                            </div>
                        </td>
                        <td class="py-2 px-2">
                            <div class="h-14 bg-green-50 border border-green-200 rounded-lg"></div>
                        </td>
                        <td class="py-2 px-2"><div class="h-14 bg-gray-100 border border-gray-200 rounded-lg"></div></td>
                        <td class="py-2 px-2"><div class="h-14 bg-gray-100 border border-gray-200 rounded-lg"></div></td>
                    </tr>

                    <!-- 10:00 -->
                    <tr class="border-b border-gray-100">
                        <td class="py-2 px-4 text-sm text-gray-500 font-medium bg-gray-50">10:00</td>
                        <td class="py-2 px-2"><div class="h-14 bg-green-50 border border-green-200 rounded-lg"></div></td>
                        <td class="py-2 px-2"><div class="h-14 bg-green-50 border border-green-200 rounded-lg"></div></td>
                        <td class="py-2 px-2"><div class="h-14 bg-green-50 border border-green-200 rounded-lg"></div></td>
                        <td class="py-2 px-2"><div class="h-14 bg-green-50 border border-green-200 rounded-lg"></div></td>
                        <td class="py-2 px-2"><div class="h-14 bg-green-50 border border-green-200 rounded-lg"></div></td>
                        <td class="py-2 px-2"><div class="h-14 bg-gray-100 border border-gray-200 rounded-lg"></div></td>
                        <td class="py-2 px-2"><div class="h-14 bg-gray-100 border border-gray-200 rounded-lg"></div></td>
                    </tr>

                    <!-- 11:00 -->
                    <tr class="border-b border-gray-100">
                        <td class="py-2 px-4 text-sm text-gray-500 font-medium bg-gray-50">11:00</td>
                        <td class="py-2 px-2"><div class="h-14 bg-green-50 border border-green-200 rounded-lg"></div></td>
                        <td class="py-2 px-2"><div class="h-14 bg-green-50 border border-green-200 rounded-lg"></div></td>
                        <td class="py-2 px-2"><div class="h-14 bg-green-50 border border-green-200 rounded-lg"></div></td>
                        <td class="py-2 px-2"><div class="h-14 bg-green-50 border border-green-200 rounded-lg"></div></td>
                        <td class="py-2 px-2"><div class="h-14 bg-green-50 border border-green-200 rounded-lg"></div></td>
                        <td class="py-2 px-2"><div class="h-14 bg-gray-100 border border-gray-200 rounded-lg"></div></td>
                        <td class="py-2 px-2"><div class="h-14 bg-gray-100 border border-gray-200 rounded-lg"></div></td>
                    </tr>

                    <!-- 12:00 - Pause -->
                    <tr class="border-b border-gray-100 bg-amber-50/50">
                        <td class="py-2 px-4 text-sm text-gray-500 font-medium bg-amber-50">12:00</td>
                        <td colspan="7" class="py-2 px-2">
                            <div class="h-14 bg-amber-100 border border-amber-300 rounded-lg flex items-center justify-center">
                                <i class="fas fa-utensils text-amber-600 mr-2"></i>
                                <span class="text-sm font-medium text-amber-700">Pause Déjeuner</span>
                            </div>
                        </td>
                    </tr>

                    <!-- 13:00 -->
                    <tr class="border-b border-gray-100 bg-amber-50/50">
                        <td class="py-2 px-4 text-sm text-gray-500 font-medium bg-amber-50">13:00</td>
                        <td colspan="7" class="py-2 px-2">
                            <div class="h-14 bg-amber-50 border border-amber-200 rounded-lg"></div>
                        </td>
                    </tr>

                    <!-- 14:00 -->
                    <tr class="border-b border-gray-100">
                        <td class="py-2 px-4 text-sm text-gray-500 font-medium bg-gray-50">14:00</td>
                        <td class="py-2 px-2">
                            <div class="h-14 bg-green-100 border-2 border-green-400 rounded-lg flex items-center justify-center">
                                <span class="text-xs font-semibold text-green-700">14:00 - 18:00</span>
                            </div>
                        </td>
                        <td class="py-2 px-2">
                            <div class="h-14 bg-green-100 border-2 border-green-400 rounded-lg flex items-center justify-center">
                                <span class="text-xs font-semibold text-green-700">14:00 - 18:00</span>
                            </div>
                        </td>
                        <td class="py-2 px-2">
                            <a href="/disponibilites/create?jour=mercredi&heure=14:00" class="block h-14 bg-gray-50 border-2 border-dashed border-gray-300 rounded-lg flex items-center justify-center hover:bg-blue-50 hover:border-blue-300 transition">
                                <i class="fas fa-plus text-gray-400"></i>
                            </a>
                        </td>
                        <td class="py-2 px-2">
                            <div class="h-14 bg-green-100 border-2 border-green-400 rounded-lg flex items-center justify-center">
                                <span class="text-xs font-semibold text-green-700">14:00 - 17:00</span>
                            </div>
                        </td>
                        <td class="py-2 px-2">
                            <div class="h-14 bg-green-100 border-2 border-green-400 rounded-lg flex items-center justify-center">
                                <span class="text-xs font-semibold text-green-700">14:00 - 16:00</span>
                            </div>
                        </td>
                        <td class="py-2 px-2"><div class="h-14 bg-gray-100 border border-gray-200 rounded-lg"></div></td>
                        <td class="py-2 px-2"><div class="h-14 bg-gray-100 border border-gray-200 rounded-lg"></div></td>
                    </tr>

                    <!-- 15:00 - 17:00 -->
                    <tr class="border-b border-gray-100">
                        <td class="py-2 px-4 text-sm text-gray-500 font-medium bg-gray-50">15:00</td>
                        <td class="py-2 px-2"><div class="h-14 bg-green-50 border border-green-200 rounded-lg"></div></td>
                        <td class="py-2 px-2"><div class="h-14 bg-green-50 border border-green-200 rounded-lg"></div></td>
                        <td class="py-2 px-2">
                            <a href="/disponibilites/create?jour=mercredi&heure=15:00" class="block h-14 bg-gray-50 border-2 border-dashed border-gray-300 rounded-lg flex items-center justify-center hover:bg-blue-50 hover:border-blue-300 transition">
                                <i class="fas fa-plus text-gray-400"></i>
                            </a>
                        </td>
                        <td class="py-2 px-2"><div class="h-14 bg-green-50 border border-green-200 rounded-lg"></div></td>
                        <td class="py-2 px-2"><div class="h-14 bg-green-50 border border-green-200 rounded-lg"></div></td>
                        <td class="py-2 px-2"><div class="h-14 bg-gray-100 border border-gray-200 rounded-lg"></div></td>
                        <td class="py-2 px-2"><div class="h-14 bg-gray-100 border border-gray-200 rounded-lg"></div></td>
                    </tr>

                    <tr class="border-b border-gray-100">
                        <td class="py-2 px-4 text-sm text-gray-500 font-medium bg-gray-50">16:00</td>
                        <td class="py-2 px-2"><div class="h-14 bg-green-50 border border-green-200 rounded-lg"></div></td>
                        <td class="py-2 px-2"><div class="h-14 bg-green-50 border border-green-200 rounded-lg"></div></td>
                        <td class="py-2 px-2">
                            <a href="/disponibilites/create?jour=mercredi&heure=16:00" class="block h-14 bg-gray-50 border-2 border-dashed border-gray-300 rounded-lg flex items-center justify-center hover:bg-blue-50 hover:border-blue-300 transition">
                                <i class="fas fa-plus text-gray-400"></i>
                            </a>
                        </td>
                        <td class="py-2 px-2"><div class="h-14 bg-green-50 border border-green-200 rounded-lg"></div></td>
                        <td class="py-2 px-2">
                            <a href="/disponibilites/create?jour=vendredi&heure=16:00" class="block h-14 bg-gray-50 border-2 border-dashed border-gray-300 rounded-lg flex items-center justify-center hover:bg-blue-50 hover:border-blue-300 transition">
                                <i class="fas fa-plus text-gray-400"></i>
                            </a>
                        </td>
                        <td class="py-2 px-2"><div class="h-14 bg-gray-100 border border-gray-200 rounded-lg"></div></td>
                        <td class="py-2 px-2"><div class="h-14 bg-gray-100 border border-gray-200 rounded-lg"></div></td>
                    </tr>

                    <tr>
                        <td class="py-2 px-4 text-sm text-gray-500 font-medium bg-gray-50">17:00</td>
                        <td class="py-2 px-2"><div class="h-14 bg-green-50 border border-green-200 rounded-lg"></div></td>
                        <td class="py-2 px-2"><div class="h-14 bg-green-50 border border-green-200 rounded-lg"></div></td>
                        <td class="py-2 px-2">
                            <a href="/disponibilites/create?jour=mercredi&heure=17:00" class="block h-14 bg-gray-50 border-2 border-dashed border-gray-300 rounded-lg flex items-center justify-center hover:bg-blue-50 hover:border-blue-300 transition">
                                <i class="fas fa-plus text-gray-400"></i>
                            </a>
                        </td>
                        <td class="py-2 px-2">
                            <a href="/disponibilites/create?jour=jeudi&heure=17:00" class="block h-14 bg-gray-50 border-2 border-dashed border-gray-300 rounded-lg flex items-center justify-center hover:bg-blue-50 hover:border-blue-300 transition">
                                <i class="fas fa-plus text-gray-400"></i>
                            </a>
                        </td>
                        <td class="py-2 px-2">
                            <a href="/disponibilites/create?jour=vendredi&heure=17:00" class="block h-14 bg-gray-50 border-2 border-dashed border-gray-300 rounded-lg flex items-center justify-center hover:bg-blue-50 hover:border-blue-300 transition">
                                <i class="fas fa-plus text-gray-400"></i>
                            </a>
                        </td>
                        <td class="py-2 px-2"><div class="h-14 bg-gray-100 border border-gray-200 rounded-lg"></div></td>
                        <td class="py-2 px-2"><div class="h-14 bg-gray-100 border border-gray-200 rounded-lg"></div></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Legend -->
        <div class="p-4 bg-gray-50 border-t border-gray-200 flex flex-wrap gap-6 justify-center">
            <div class="flex items-center">
                <div class="w-5 h-5 bg-green-100 border-2 border-green-400 rounded mr-2"></div>
                <span class="text-sm text-gray-600">Disponible</span>
            </div>
            <div class="flex items-center">
                <div class="w-5 h-5 bg-gray-50 border-2 border-dashed border-gray-300 rounded mr-2"></div>
                <span class="text-sm text-gray-600">Non configuré</span>
            </div>
            <div class="flex items-center">
                <div class="w-5 h-5 bg-gray-100 border border-gray-200 rounded mr-2"></div>
                <span class="text-sm text-gray-600">Fermé</span>
            </div>
            <div class="flex items-center">
                <div class="w-5 h-5 bg-amber-100 border border-amber-300 rounded mr-2"></div>
                <span class="text-sm text-gray-600">Pause</span>
            </div>
        </div>
    </div>

    <!-- List View -->
    <div class="bg-white rounded-xl shadow-lg overflow-hidden">
        <div class="p-6 border-b border-gray-200">
            <h2 class="text-xl font-bold text-gray-900 flex items-center">
                <i class="fas fa-list text-amber-600 mr-2"></i>
                Liste des Créneaux
            </h2>
        </div>

        <div class="divide-y divide-gray-100">
            <!-- Lundi -->
            <div class="p-5 hover:bg-gray-50 transition">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                    <div class="flex items-center">
                        <div class="w-14 h-14 bg-blue-900 rounded-xl flex items-center justify-center mr-4">
                            <span class="text-white font-bold">LUN</span>
                        </div>
                        <div>
                            <p class="font-semibold text-gray-900 text-lg">Lundi</p>
                            <p class="text-sm text-gray-500">3 créneaux • 8 heures</p>
                        </div>
                    </div>
                    <div class="flex flex-wrap items-center gap-2">
                        <span class="px-4 py-2 bg-green-100 text-green-700 rounded-lg text-sm font-medium">08:00-09:00</span>
                        <span class="px-4 py-2 bg-green-100 text-green-700 rounded-lg text-sm font-medium">09:00-12:00</span>
                        <span class="px-4 py-2 bg-green-100 text-green-700 rounded-lg text-sm font-medium">14:00-18:00</span>
                        <a href="/disponibilites/edit?jour=lundi" class="p-2 text-blue-600 hover:bg-blue-100 rounded-lg"><i class="fas fa-edit"></i></a>
                        <a href="/disponibilites/delete?jour=lundi" class="p-2 text-red-600 hover:bg-red-100 rounded-lg"><i class="fas fa-trash"></i></a>
                    </div>
                </div>
            </div>

            <!-- Mardi -->
            <div class="p-5 hover:bg-gray-50 transition">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                    <div class="flex items-center">
                        <div class="w-14 h-14 bg-blue-900 rounded-xl flex items-center justify-center mr-4">
                            <span class="text-white font-bold">MAR</span>
                        </div>
                        <div>
                            <p class="font-semibold text-gray-900 text-lg">Mardi</p>
                            <p class="text-sm text-gray-500">2 créneaux • 7 heures</p>
                        </div>
                    </div>
                    <div class="flex flex-wrap items-center gap-2">
                        <span class="px-4 py-2 bg-green-100 text-green-700 rounded-lg text-sm font-medium">09:00-12:00</span>
                        <span class="px-4 py-2 bg-green-100 text-green-700 rounded-lg text-sm font-medium">14:00-18:00</span>
                        <a href="/disponibilites/edit?jour=mardi" class="p-2 text-blue-600 hover:bg-blue-100 rounded-lg"><i class="fas fa-edit"></i></a>
                        <a href="/disponibilites/delete?jour=mardi" class="p-2 text-red-600 hover:bg-red-100 rounded-lg"><i class="fas fa-trash"></i></a>
                    </div>
                </div>
            </div>

            <!-- Mercredi -->
            <div class="p-5 hover:bg-gray-50 transition">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                    <div class="flex items-center">
                        <div class="w-14 h-14 bg-blue-900 rounded-xl flex items-center justify-center mr-4">
                            <span class="text-white font-bold">MER</span>
                        </div>
                        <div>
                            <p class="font-semibold text-gray-900 text-lg">Mercredi</p>
                            <p class="text-sm text-gray-500">1 créneau • 4 heures</p>
                        </div>
                    </div>
                    <div class="flex flex-wrap items-center gap-2">
                        <span class="px-4 py-2 bg-green-100 text-green-700 rounded-lg text-sm font-medium">08:00-12:00</span>
                        <a href="/disponibilites/edit?jour=mercredi" class="p-2 text-blue-600 hover:bg-blue-100 rounded-lg"><i class="fas fa-edit"></i></a>
                        <a href="/disponibilites/delete?jour=mercredi" class="p-2 text-red-600 hover:bg-red-100 rounded-lg"><i class="fas fa-trash"></i></a>
                    </div>
                </div>
            </div>

            <!-- Jeudi -->
            <div class="p-5 hover:bg-gray-50 transition">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                    <div class="flex items-center">
                        <div class="w-14 h-14 bg-blue-900 rounded-xl flex items-center justify-center mr-4">
                            <span class="text-white font-bold">JEU</span>
                        </div>
                        <div>
                            <p class="font-semibold text-gray-900 text-lg">Jeudi</p>
                            <p class="text-sm text-gray-500">2 créneaux • 6 heures</p>
                        </div>
                    </div>
                    <div class="flex flex-wrap items-center gap-2">
                        <span class="px-4 py-2 bg-green-100 text-green-700 rounded-lg text-sm font-medium">09:00-12:00</span>
                        <span class="px-4 py-2 bg-green-100 text-green-700 rounded-lg text-sm font-medium">14:00-17:00</span>
                        <a href="/disponibilites/edit?jour=jeudi" class="p-2 text-blue-600 hover:bg-blue-100 rounded-lg"><i class="fas fa-edit"></i></a>
                        <a href="/disponibilites/delete?jour=jeudi" class="p-2 text-red-600 hover:bg-red-100 rounded-lg"><i class="fas fa-trash"></i></a>
                    </div>
                </div>
            </div>

            <!-- Vendredi -->
            <div class="p-5 hover:bg-gray-50 transition">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                    <div class="flex items-center">
                        <div class="w-14 h-14 bg-blue-900 rounded-xl flex items-center justify-center mr-4">
                            <span class="text-white font-bold">VEN</span>
                        </div>
                        <div>
                            <p class="font-semibold text-gray-900 text-lg">Vendredi</p>
                            <p class="text-sm text-gray-500">2 créneaux • 6 heures</p>
                        </div>
                    </div>
                    <div class="flex flex-wrap items-center gap-2">
                        <span class="px-4 py-2 bg-green-100 text-green-700 rounded-lg text-sm font-medium">08:00-12:00</span>
                        <span class="px-4 py-2 bg-green-100 text-green-700 rounded-lg text-sm font-medium">14:00-16:00</span>
                        <a href="/disponibilites/edit?jour=vendredi" class="p-2 text-blue-600 hover:bg-blue-100 rounded-lg"><i class="fas fa-edit"></i></a>
                        <a href="/disponibilites/delete?jour=vendredi" class="p-2 text-red-600 hover:bg-red-100 rounded-lg"><i class="fas fa-trash"></i></a>
                    </div>
                </div>
            </div>

            <!-- Samedi -->
            <div class="p-5 bg-gray-50">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                    <div class="flex items-center">
                        <div class="w-14 h-14 bg-gray-300 rounded-xl flex items-center justify-center mr-4">
                            <span class="text-gray-600 font-bold">SAM</span>
                        </div>
                        <div>
                            <p class="font-semibold text-gray-500 text-lg">Samedi</p>
                            <p class="text-sm text-gray-400">Fermé</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="px-4 py-2 bg-gray-200 text-gray-500 rounded-lg text-sm">Non disponible</span>
                        <a href="/disponibilites/create?jour=samedi" class="p-2 text-blue-600 hover:bg-blue-100 rounded-lg"><i class="fas fa-plus"></i></a>
                    </div>
                </div>
            </div>

            <!-- Dimanche -->
            <div class="p-5 bg-gray-50">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                    <div class="flex items-center">
                        <div class="w-14 h-14 bg-gray-300 rounded-xl flex items-center justify-center mr-4">
                            <span class="text-gray-600 font-bold">DIM</span>
                        </div>
                        <div>
                            <p class="font-semibold text-gray-500 text-lg">Dimanche</p>
                            <p class="text-sm text-gray-400">Fermé</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="px-4 py-2 bg-gray-200 text-gray-500 rounded-lg text-sm">Non disponible</span>
                        <a href="/disponibilites/create?jour=dimanche" class="p-2 text-blue-600 hover:bg-blue-100 rounded-lg"><i class="fas fa-plus"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Summary -->
        <div class="p-6 bg-blue-50 border-t border-blue-100">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                <div class="flex items-center gap-8">
                    <div>
                        <p class="text-sm text-gray-500">Total Heures/Semaine</p>
                        <p class="text-2xl font-bold text-blue-900">31 heures</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Jours Actifs</p>
                        <p class="text-2xl font-bold text-blue-900">5 jours</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>