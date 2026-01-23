<div class="py-6 px-4 sm:px-6 lg:px-8">
    <!-- Header -->
    <div class="mb-8 flex flex-col md:flex-row md:items-center md:justify-between">
        <div>
            <h1 class="text-3xl font-bold text-gray-900">Demandes de Consultation</h1>
            <p class="mt-2 text-gray-600">Gérez les demandes de rendez-vous entrantes</p>
        </div>

    </div>

    <!-- Pending Requests Section -->
    <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-8">
        <div class="p-6 border-b border-gray-200 bg-amber-50">
            <h2 class="text-xl font-bold text-gray-900 flex items-center">
                <i class="fas fa-bell text-amber-600 mr-2"></i>
                Demandes en Attente
            </h2>
        </div>

        <div class="divide-y divide-gray-100">
            <!-- Request 1 -->
            <?php foreach ($reservations as $reservation):
                if ($reservation['status'] === 'pending'): ?>

                    <div class="p-6 hover:bg-gray-50 transition">
                        <div class="flex flex-col lg:flex-row lg:items-start lg:justify-between gap-4">
                            <div class="flex items-start flex-grow">
                                <div class="flex-grow">
                                    <div class="flex items-center gap-3 mb-1">
                                        <h3 class="font-semibold text-gray-900 text-lg"><?= $reservation['name'] ?></h3>
                                        <span class="px-2 py-0.5 bg-amber-100 text-amber-700 rounded text-xs font-medium"><?= $reservation['status'] ?></span>
                                    </div>
                                    <p class="text-gray-600">
                                        <i class="fas fa-briefcase text-amber-600 mr-2"></i>
                                        <?= $reservation['motif'] ?>
                                    </p>
                                    <div class="flex flex-wrap items-center gap-4 mt-3 text-sm text-gray-500">
                                        <span>
                                            <i class="fas fa-calendar mr-1 text-blue-900"></i>
                                            <?= $reservation['date_reservation'] ?>
                                        </span>
                                        <span>
                                            <i class="fas fa-clock mr-1 text-blue-900"></i>
                                            <?= date('H:i',strtotime($reservation['heure_debut']))   ?> - <?= date('H:i',strtotime($reservation['heure_fin']))  ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center gap-3 lg:flex-shrink-0">
                                <a href="/reservations/accept?id=<?= $reservation['id'] ?>" class="px-5 py-2.5 bg-green-600 text-white rounded-lg font-medium hover:bg-green-700 transition flex items-center">
                                    <i class="fas fa-check mr-2"></i>
                                    Accepter
                                </a>
                                <a href="/reservations/reject?id=<?= $reservation['id'] ?>" class="px-5 py-2.5 bg-white border border-red-300 text-red-600 rounded-lg font-medium hover:bg-red-50 transition flex items-center">
                                    <i class="fas fa-times mr-2"></i>
                                    Refuser
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Confirmed Reservations Table -->
    <div class="bg-white rounded-xl shadow-lg overflow-hidden">
        <div class="p-6 border-b border-gray-200">
            <h2 class="text-xl font-bold text-gray-900 flex items-center">
                <i class="fas fa-calendar-check text-green-600 mr-2"></i>
                Rendez-vous History
            </h2>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full min-w-[800px]">
                <thead class="bg-gray-50 border-b border-gray-200">
                    <tr>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Client</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Date & Heure</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Motif</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Statut</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    <?php foreach ($reservations as $reservation): ?>
                        <?php if ($reservation['status'] === 'confirmed'  || $reservation['status'] === 'cancelled'): ?>

                            <tr class="hover:bg-blue-50 bg-blue-50/50">
                                <td class="px-6 py-4">
                                    <div class="flex items-center">
                                        <div>
                                            <p class="font-medium text-gray-900"><?= $reservation['name'] ?></p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <p class="text-sm text-gray-500"><?= $reservation['heure_debut'] ?> - <?= $reservation['heure_fin'] ?></p>
                                </td>
                                <td class="px-6 py-4 text-gray-600"><?= $reservation['motif'] ?></td>
                                <td class="px-6 py-4">
                                    <?php if($reservation['status'] === 'confirmed') :?>
                                    <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-sm font-medium">
                                        <i class="fas fa-check-circle mr-1"></i><?= $reservation['status'] ?>
                                    </span>
                                    <?php elseif($reservation['status'] === 'cancelled') : ?>
                                    <span class="px-3 py-1 bg-red-100 text-red-700 rounded-full text-sm font-medium">
                                        <i class="fas fa-check-circle mr-1"></i><?= $reservation['status'] ?>
                                    </span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <?php endif; ?>
                    <?php endforeach; ?>
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