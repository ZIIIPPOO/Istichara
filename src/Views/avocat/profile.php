
<div class="min-h-screen bg-gray-100 p-10">

    <div class="max-w-3xl mx-auto bg-white rounded-2xl shadow-lg overflow-hidden">

        <!-- Header -->
        <div class="bg-gradient-to-r from-blue-500 to-blue-600 p-6 text-white">
            <div class="flex items-center gap-4">
                <div class="w-16 h-16 rounded-full bg-white/30 flex items-center justify-center text-2xl font-bold">
                    <?= 'A' . strtoupper($avocat['name'][0]) ?>
                </div>
                <div>
                    <h2 class="text-2xl font-bold"><?= $avocat['name'] ?></h2>
                    <p class="text-indigo-100">Avocat • <?= $avocat['city'] ?></p>
                </div>
            </div>
        </div>

        <!-- Content -->
        <div class="p-8 space-y-6">

            <!-- Infos principales -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                <div>
                    <p class="text-sm text-gray-500">Nom complet</p>
                    <p class="font-semibold text-gray-800"><?= $avocat['name'] ?></p>
                </div>

                <div>
                    <p class="text-sm text-gray-500">Email</p>
                    <p class="font-semibold text-gray-800"><?= $avocat['email'] ?></p>
                </div>
                <?php if($_SESSION['user']['role']==='avocat'): ?>
                <div>
                    <p class="text-sm text-gray-500">telephone</p>
                    <p class="font-semibold text-gray-800"><?= $avocat['telephone'] ?></p>
                </div>
                <?php endif; ?>

                <div>
                    <p class="text-sm text-gray-500">Ville</p>
                    <p class="font-semibold text-gray-800"><?= $avocat['city'] ?></p>
                </div>

                <div>
                    <p class="text-sm text-gray-500">Années d’expérience</p>
                    <p class="font-semibold text-gray-800"><?= $avocat['annees_experience'] ?> ans</p>
                </div>

                <div>
                    <p class="text-sm text-gray-500">Tarif horaire</p>
                    <p class="font-semibold text-gray-800"><?= $avocat['tarif_horaire'] ?> DH</p>
                </div>
            <?php if($_SESSION['user']['role']==='avocat'): ?>
                                <div>
                    <p class="text-sm text-gray-500">Date de creation</p>
                    <span class="inline-block px-3 py-1 rounded-full text-sm font-semibold bg-amber-100 text-amber-700">
                        <?= $avocat['created_at'] ?>
                    </span>
                </div>
            <?php endif; ?>


                <div>
                    <p class="text-sm text-gray-500">Statut</p>
                    <span class="inline-block px-3 py-1 rounded-full text-sm font-semibold bg-green-100 text-green-700">
                        <?= $avocat['asigned'] ?>
                    </span>
                </div>


            </div>

            <!-- Disponibilités -->
            <div class="bg-green-50 border-l-4 border-green-500 p-6 rounded-lg">
                <h3 class="text-lg font-bold text-green-800 mb-4 flex items-center">
                    <i class="fas fa-clock mr-2"></i>
                    Disponibilités
                </h3>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                    <!-- Jours -->
                    <div>
                        <p class="text-sm text-gray-500 mb-2">Jours disponibles</p>
                        <div class="flex flex-wrap gap-2">
                            <?php foreach ($disponibilites as $disponibilite): ?>
                            <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-sm"><?= $disponibilite['jour_semaine'] ?></span>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <!-- Heures -->
                    <div>
                        <p class="text-sm text-gray-500 mb-2">Heures disponibles</p>
                        <div class="flex flex-wrap gap-2">
                            <?php foreach ($disponibilites as $disponibilite): ?>
                            <span class="px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-sm"><?= $disponibilite['heure_debut'] ?> - <?= $disponibilite['heure_fin'] ?></span>
                            <?php endforeach; ?>
                        </div>
                    </div>

                </div>
            </div>


            <!-- Spécialité / Actes -->
            <div class="bg-blue-50 border-l-4 border-indigo-500 p-4 rounded-lg">
                <p class="text-sm text-blue-500 mb-1">Consultation En Ligne</p>
                <p class="font-medium text-blue-800">
                    <?php
                    if($avocat['consultation_en_ligne']==1):
                        echo "Opened";
                    else:
                        echo "Closed";
                    endif;
                    ?>
                </p>
            </div>

            <!-- Spécialité / Actes -->
            <div class="bg-gray-50 border-l-4 border-indigo-500 p-4 rounded-lg">
                <p class="text-sm text-gray-500 mb-1">Spéciqlité</p>
                <p class="font-medium text-gray-800"><?= $avocat['specialites'] ?></p>
            </div>
        <?php if($_SESSION['user']['role']==='admin'): ?>
            
            <!-- PDF -->
            <div class="bg-blue-50 p-4 rounded-lg flex items-center justify-between">
                <div>
                    <p class="font-semibold text-blue-900">Document justificatif (PDF)</p>
                    <p class="text-sm text-blue-600">Diplôme / Autorisation</p>
                </div>
                <form action="/admin/professional/pdf?type=avocat" method="POST" target="_blank">
                    <input type="hidden" name="id" value="<?= $avocat['id'] ?>">
                    <button type="submit"
                        class="px-5 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition flex items-center gap-2">
                        <i class="fas fa-file-pdf"></i>
                        Voir PDF
                    </button>
                </form>
            </div>

        </div>

        <!-- Actions -->
        <div class="bg-gray-50 p-6 border-t flex justify-end gap-4">

            <!-- Refuser -->
            <a href="/admin/professional/reject?type=avocat&id=<?= $avocat['id'] ?>">
                <button class="px-6 py-3 bg-red-500 text-white rounded-xl font-semibold hover:bg-red-600 transition flex items-center gap-2">
                    <i class="fas fa-times"></i>
                    Refuser
                </button>
            </a>

            <!-- Accepter -->
            <a href="/admin/professional/accept?type=avocat&id=<?= $avocat['id'] ?>">
                <button class="px-6 py-3 bg-green-500 text-white rounded-xl font-semibold hover:bg-green-600 transition flex items-center gap-2">
                    <i class="fas fa-check"></i>
                    Accepter
                </button>
            </a>

        </div>
        
    </div>
    <?php elseif($_SESSION['user']['role']==='avocat'): ?>
       <a href="/update/user?user=<?= $avocat['id'] ?>">
           <button class="px-6 py-3  mt-5 bg-green-500 text-white rounded-xl font-semibold hover:bg-green-600 transition flex items-center gap-2">
               Edite Profile
           </button>
       </a>
   <?php endif; ?>
</div>