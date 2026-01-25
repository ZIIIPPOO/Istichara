<div class="py-6 px-4 sm:px-6 lg:px-8">
    <!-- Header -->
    <div class="mb-8 flex flex-col md:flex-row md:items-center md:justify-between">
        <div>
            <h1 class="text-3xl font-bold text-gray-900">Mes Réservations</h1>
            <p class="mt-2 text-gray-600">Consultez vos demandes de rendez-vous</p>
        </div>
        <a href="/reservation" class="mt-4 md:mt-0 px-6 py-3 bg-blue-900 text-white rounded-lg font-semibold hover:bg-blue-800 transition flex items-center justify-center gap-2">
            <i class="fas fa-plus"></i>
            Nouvelle Réservation
        </a>
    </div>

    <!-- Pending Reservations -->
    <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-8">
        <div class="p-6 border-b border-gray-200 bg-amber-50">
            <h2 class="text-xl font-bold text-gray-900 flex items-center">
                <i class="fas fa-clock text-amber-600 mr-2"></i>
                Demandes en Attente
            </h2>
        </div>

        <div class="divide-y divide-gray-100">
            <?php 

            foreach ($reservations as $reservation):
                if ($reservation['status'] === 'pending'): 
            ?>
                <div class="p-6 hover:bg-gray-50 transition">
                    <div class="flex flex-col lg:flex-row lg:items-start lg:justify-between gap-4">
                        <div class="flex-grow">
                            <div class="flex items-center gap-3 mb-2">
                                <i class="fas fa-user-tie text-blue-900 text-xl"></i>
                                <h3 class="font-bold text-gray-900 text-lg"><?= $reservation['name'] ?></h3>
                                <span class="px-3 py-1 bg-amber-100 text-amber-700 rounded-full text-xs font-medium">
                                    <i class="fas fa-hourglass-half mr-1"></i>
                                    En attente
                                </span>
                            </div>
                            
                            <div class="mt-3 space-y-2">
                                <p class="text-gray-700 flex items-start">
                                    <i class="fas fa-briefcase text-blue-900 mr-3 mt-1"></i>
                                    <span><?= $reservation['motif'] ?></span>
                                </p>
                                
                                <div class="flex flex-wrap items-center gap-4 text-sm text-gray-600">
                                    <span class="flex items-center">
                                        <i class="fas fa-calendar text-blue-900 mr-2"></i>
                                        <?= $reservation['date_reservation'] ?>
                                    </span>
                                    <span class="flex items-center">
                                        <i class="fas fa-clock text-blue-900 mr-2"></i>
                                       <?= date('H:i',strtotime($reservation['heure_debut'])) ?> - <?= date('H:i',strtotime($reservation['heure_fin'])) ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            <?php 
                endif;
            endforeach;
            
            ?>
        </div>
    </div>

    <!-- Confirmed Reservations -->
    <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-8">
        <div class="p-6 border-b border-gray-200 bg-green-50">
            <h2 class="text-xl font-bold text-gray-900 flex items-center">
                <i class="fas fa-check-circle text-green-600 mr-2"></i>
                Rendez-vous Confirmés
            </h2>
        </div>

        <div class="divide-y divide-gray-100">
            <?php 
            foreach ($reservations as $reservation):
                if ($reservation['status'] === 'confirmed'): 
            ?>
                <div class="p-6 bg-green-50/30">
                    <div class="flex items-start gap-4">
                        <div class="flex-grow">
                            <div class="flex items-center gap-3 mb-2">
                                <i class="fas fa-user-tie text-green-600 text-xl"></i>
                                <h3 class="font-bold text-gray-900 text-lg"><?= $reservation['name'] ?></h3>
                                <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-medium">
                                    <i class="fas fa-check-circle mr-1"></i>
                                    Confirmé
                                </span>
                            </div>
                            
                            <div class="mt-3 space-y-2">
                                <p class="text-gray-700 flex items-start">
                                    <i class="fas fa-briefcase text-green-600 mr-3 mt-1"></i>
                                    <span><?= $reservation['motif'] ?></span>
                                </p>
                                
                                <div class="flex flex-wrap items-center gap-4 text-sm text-gray-600">
                                    <span class="flex items-center">
                                        <i class="fas fa-calendar text-green-600 mr-2"></i>
                                        <?= $reservation['date_reservation'] ?>
                                    </span>
                                    <span class="flex items-center">
                                        <i class="fas fa-clock text-green-600 mr-2"></i>
                                        <?= date('H:i',strtotime($reservation['heure_debut'])) ?> - <?= date('H:i',strtotime($reservation['heure_fin'])) ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php 
                endif;
            endforeach;
            ?>
        </div>
    </div>

</div>