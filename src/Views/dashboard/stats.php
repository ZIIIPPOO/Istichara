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
                    <p class="text-blue-100 text-sm">Total Demand</p>
                    <p class="text-4xl font-bold mt-2"><?= $dashboard->getTotalDemand()  ?></p>
                    <p class="text-blue-200 text-xs mt-2">
                        <i class="fas fa-arrow-up mr-1"></i>
                        
                    </p>
                </div>
                <i class="fas fa-user-tie text-5xl opacity-20"></i>
            </div>
        </div>

        <!-- Total Huissiers -->
        <div class="stat-card">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-blue-100 text-sm">Total Money</p>
                    <p class="text-4xl font-bold mt-2"><?= $dashboard->getTotalMoney()   ?></p>
                </div>
                <i class="fas fa-gavel text-5xl opacity-20"></i>
            </div>
        </div>

        <!-- Total Global -->
        <div class="stat-card">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-blue-100 text-sm">Total visit</p>
                    <p class="text-4xl font-bold mt-2"><?= $dashboard->getNomberClientUnique()    ?></p>
                </div>
            </div>
        </div>
        <div class="stat-card">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-blue-100 text-sm">Total Hour</p>
                    <p class="text-4xl font-bold mt-2"><?= $dashboard->getTotalHour()    ?></p>
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
                            <!-- <th class="text-left py-3 px-4 font-semibold text-gray-700">Ville</th> -->
                            <th class="text-center py-3 px-4 font-semibold text-gray-700">Date</th>
                            <th class="text-center py-3 px-4 font-semibold text-gray-700">Number of visit</th>
                            <!-- <th class="text-center py-3 px-4 font-semibold text-gray-700">Total</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($dashboard->getVisitorTime() as $v) :
                            $date = $v["visit_date"];
                            $count = $v["count"];

                        ?>
                            <tr class="border-b border-gray-100 hover:bg-gray-50">

                                <td class="text-center py-3 px-4 text-gray-600"><?= $date ?></td>
                                <td class="text-center py-3 px-4 text-gray-600"><?= $count ?></td>
                                <td class="text-center py-3 px-4">
                                    <!-- <span class="font-bold text-blue-900 text-lg">< ?= $avocatCount + $huissierCount ?></span> -->
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>


        <div class="bg-white rounded-lg shadow-lg p-6">
            <div class="overflow-x-auto">
                <table class="min-w-full">
                    <thead>
                        <tr class="border-b-2 border-gray-200">
                            <!-- <th class="text-left py-3 px-4 font-semibold text-gray-700">Ville</th> -->
                            <th class="text-center py-3 px-4 font-semibold text-gray-700">Date</th>
                            <th class="text-center py-3 px-4 font-semibold text-gray-700">Hour of work</th>
                            <th class="text-center py-3 px-4 font-semibold text-gray-700">Start hour</th>
                            <th class="text-center py-3 px-4 font-semibold text-gray-700">End hour</th>
                            <th class="text-center py-3 px-4 font-semibold text-gray-700">Client</th>
                            <!-- <th class="text-center py-3 px-4 font-semibold text-gray-700">Total</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($dashboard->getHourOfWork() as $ar) :
                        ?>
                            <tr class="border-b border-gray-100 hover:bg-gray-50">

                                <td class="text-center py-3 px-4 text-gray-600"><?= $ar["date"] ?></td>
                                <td class="text-center py-3 px-4 text-gray-600"><?= $ar["hour"] ?></td>
                                <td class="text-center py-3 px-4 text-gray-600"><?= $ar["start"] ?></td>
                                <td class="text-center py-3 px-4 text-gray-600"><?= $ar["end"] ?></td>
                                <td class="text-center py-3 px-4 text-gray-600"><?= $ar["client"] ?></td>
                                <td class="text-center py-3 px-4">
                                    <!-- <span class="font-bold text-blue-900 text-lg">< ?= $avocatCount + $huissierCount ?></span> -->
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>

    
    </div>


</div>