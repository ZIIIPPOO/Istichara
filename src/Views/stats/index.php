<div class="py-6 px-4 sm:px-6 lg:px-8">
    <!-- Header -->
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-900">Statistiques de la Plateforme</h1>
        <p class="mt-2 text-gray-600">Vue d'ensemble des professionnels juridiques sur ISTICHARA</p>
    </div>

    <!-- Global Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <!-- Total Avocats -->
        <div class="stat-card">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-blue-100 text-sm">Total Avocats</p>
                    <p class="text-4xl font-bold mt-2"><?= $totalAvocats  ?></p>
                    <p class="text-blue-200 text-xs mt-2">
                        <i class="fas fa-arrow-up mr-1"></i>
                        +8 ce mois
                    </p>
                </div>
                <i class="fas fa-user-tie text-5xl opacity-20"></i>
            </div>
        </div>

        <!-- Total Huissiers -->
        <div class="stat-card">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-blue-100 text-sm">Total Huissiers</p>
                    <p class="text-4xl font-bold mt-2"><?= $totalHuissiers   ?></p>
                </div>
                <i class="fas fa-gavel text-5xl opacity-20"></i>
            </div>
        </div>

        <!-- Total Global -->
        <div class="stat-card">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-blue-100 text-sm">Total Professionnels</p>
                    <p class="text-4xl font-bold mt-2"><?= $totalHuissiers + $totalAvocats  ?></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Two Columns Layout -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
        <!-- Répartition par Ville -->
        <div class="bg-white rounded-lg shadow-lg p-6">
            <h2 class="text-xl font-bold text-gray-900 mb-6 flex items-center">
                <i class="fas fa-map-marker-alt text-amber-600 mr-2"></i>
                Répartition par Ville
            </h2>

            <div class="overflow-x-auto">
                <table class="min-w-full">
                    <thead>
                        <tr class="border-b-2 border-gray-200">
                            <th class="text-left py-3 px-4 font-semibold text-gray-700">Ville</th>
                            <th class="text-center py-3 px-4 font-semibold text-gray-700">Avocats</th>
                            <th class="text-center py-3 px-4 font-semibold text-gray-700">Huissiers</th>
                            <th class="text-center py-3 px-4 font-semibold text-gray-700">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($cities as $city) :
                            $avocatCount = 0;
                            $huissierCount = 0;

                            foreach ($avocats as $a) {
                                if ($a['city'] === $city['name']) $avocatCount++;
                            }
                            foreach ($huissiers as $h) {
                                if ($h['city'] === $city['name']) $huissierCount++;
                            } ?>
                            <tr class="border-b border-gray-100 hover:bg-gray-50">
                                <td class="py-3 px-4 font-semibold text-gray-900">
                                    <i class="fas fa-city text-blue-900 mr-2"></i>
                                    <?= $city['name'] ?>
                                </td>
                                <td class="text-center py-3 px-4 text-gray-600"><?= $avocatCount ?></td>
                                <td class="text-center py-3 px-4 text-gray-600"><?= $huissierCount ?></td>
                                <td class="text-center py-3 px-4">
                                    <span class="font-bold text-blue-900 text-lg"><?= $avocatCount + $huissierCount ?></span>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Graphique Placeholder -->
        <div class="bg-white rounded-lg shadow-lg p-6">
            <h2 class="text-xl font-bold text-gray-900 mb-6 flex items-center">
                <i class="fas fa-chart-bar text-amber-600 mr-2"></i>
                Distribution Géographique
            </h2>

            <!-- Canvas pour le graphique (Chart.js) -->
            <div class="relative h-80 flex items-center justify-center border-2 border-dashed border-gray-300 rounded-lg">
                <div id="cityChart" class="w-full h-full"></div>
                <div class="absolute inset-0 flex flex-col items-center justify-center pointer-events-none">
                    <i class="fas fa-chart-column text-gray-300 text-6xl mb-4"></i>
                    <p class="text-gray-400 text-sm">Graphique - Zone réservée pour Chart.js</p>
                </div>
            </div>

            <!-- Légende -->
            <div class="mt-6 flex justify-center gap-6">
                <div class="flex items-center">
                    <div class="w-4 h-4 bg-blue-900 rounded mr-2"></div>
                    <span class="text-sm text-gray-600">Avocats</span>
                </div>
                <div class="flex items-center">
                    <div class="w-4 h-4 bg-amber-600 rounded mr-2"></div>
                    <span class="text-sm text-gray-600">Huissiers</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Top 3 Avocats par Expérience -->
    <div class="bg-white rounded-lg shadow-lg p-6 mb-8">
        <h2 class="text-xl font-bold text-gray-900 mb-6 flex items-center">
            <i class="fas fa-trophy text-amber-600 mr-2"></i>
            Top 3 des Avocats par Années d'Expérience
        </h2>
        <div class="overflow-x-auto">
            <table class="min-w-full">
                <thead>
                    <tr class="border-b-2 border-gray-200">
                        <th class="text-left py-3 px-4 font-semibold text-gray-700">Classement</th>
                        <th class="text-left py-3 px-4 font-semibold text-gray-700">Nom Complet</th>
                        <th class="text-left py-3 px-4 font-semibold text-gray-700">Ville</th>
                        <th class="text-left py-3 px-4 font-semibold text-gray-700">Spécialité Principale</th>
                        <th class="text-center py-3 px-4 font-semibold text-gray-700">Expérience</th>
                        <th class="text-center py-3 px-4 font-semibold text-gray-700">Tarif/h</th>
                    </tr>
                </thead>

                <tbody>
                    <?php if (isset($topThree[0])): ?>
                        <!-- 1er Place -->
                        <tr class="border-b border-gray-100 bg-amber-50 hover:bg-amber-100">
                            <td class="py-4 px-4">
                                <div class="flex items-center">
                                    <i class="fas fa-medal text-amber-500 text-3xl mr-3"></i>
                                    <span class="text-2xl font-bold text-gray-900">1</span>
                                </div>
                            </td>

                            <td class="py-4 px-4">
                                <p class="font-bold text-gray-900 text-lg">
                                    <?= isset($topThree[0]['name']) ? $topThree[0]['name'] : '-' ?>
                                </p>
                            </td>

                            <td class="py-4 px-4">
                                <?= isset($topThree[0]['city']) ? $topThree[0]['city'] : '-' ?>
                            </td>

                            <td class="py-4 px-4">
                                <?= isset($topThree[0]['specialites']) ? $topThree[0]['specialites'] : '-' ?>
                            </td>

                            <td class="text-center py-4 px-4">
                                <?= isset($topThree[0]['annees_experience']) ? $topThree[0]['annees_experience'] . ' ans' : '-' ?>
                            </td>

                            <td class="text-center py-4 px-4">
                                <?= isset($topThree[0]['tarif_horaire']) ? number_format($topThree[0]['tarif_horaire']) . ' DH' : '-' ?>
                            </td>
                        </tr>
                    <?php endif; ?>

                    <?php if (isset($topThree[1])): ?>
                        <!-- 2ème Place -->
                        <tr class="border-b border-gray-100 bg-gray-50 hover:bg-gray-100">
                            <td class="py-4 px-4">2</td>
                            <td class="py-4 px-4"><?= isset($topThree[1]['name']) ? $topThree[1]['name'] : '-' ?></td>
                            <td class="py-4 px-4"><?= isset($topThree[1]['city']) ? $topThree[1]['city'] : '-' ?></td>
                            <td class="py-4 px-4"><?= isset($topThree[1]['specialites']) ? $topThree[1]['specialites'] : '-' ?></td>
                            <td class="py-4 px-4 text-center">
                                <?= isset($topThree[1]['annees_experience']) ? $topThree[1]['annees_experience'] . ' ans' : '-' ?>
                            </td>
                            <td class="py-4 px-4 text-center">
                                <?= isset($topThree[1]['tarif_horaire']) ? number_format($topThree[1]['tarif_horaire']) . ' DH' : '-' ?>
                            </td>
                        </tr>
                    <?php endif; ?>

                    <?php if (isset($topThree[2])): ?>
                        <!-- 3ème Place -->
                        <tr class="border-b border-gray-100 bg-orange-50 hover:bg-orange-100">
                            <td class="py-4 px-4">3</td>
                            <td class="py-4 px-4"><?= isset($topThree[2]['name']) ? $topThree[2]['name'] : '-' ?></td>
                            <td class="py-4 px-4"><?= isset($topThree[2]['city']) ? $topThree[2]['city'] : '-' ?></td>
                            <td class="py-4 px-4"><?= isset($topThree[2]['specialites']) ? $topThree[2]['specialites'] : '-' ?></td>
                            <td class="py-4 px-4 text-center">
                                <?= isset($topThree[2]['annees_experience']) ? $topThree[2]['annees_experience'] . ' ans' : '-' ?>
                            </td>
                            <td class="py-4 px-4 text-center">
                                <?= isset($topThree[2]['tarif_horaire']) ? number_format($topThree[2]['tarif_horaire']) . ' DH' : '-' ?>
                            </td>
                        </tr>
                    <?php endif; ?>

                </tbody>
            </table>
        </div>

    </div>
</div>

<!-- Script pour Chart.js (optionnel - pour le bonus) -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Zone pour le graphique Chart.js (BONUS)
    // const ctx = document.getElementById('cityChart');
    // if (ctx) {
    //     new Chart(ctx, {
    //         type: 'bar',
    //         data: { ... }
    //     });
    // }
</script>