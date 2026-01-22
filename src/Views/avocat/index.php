<div class="py-6 px-4 sm:px-6 lg:px-8">
    <!-- Header -->
    <div class="mb-6 flex justify-between items-center">
        <div>
            <h1 class="text-3xl font-bold text-gray-900">Liste des Avocats</h1>
            <p class="mt-2 text-sm text-gray-600">Gérez tous les avocats inscrits sur la plateforme</p>
        </div>
        <a href="/avocat/create" class="btn-action btn-primary">
            <i class="fas fa-plus"></i>
            Ajouter un Avocat
        </a>
    </div>

    <!-- Table -->
    <div class="bg-white rounded-lg shadow overflow-hidden">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Nom Complet</th>
                        <th>Ville</th>
                        <th>Spécialités</th>
                        <th>Expérience</th>
                        <th>Tarif/h</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($avocats as $avocat): ?>
                        <tr>
                            <td>
                                <div class="flex items-center">
                                    <div>
                                        <p class="font-semibold text-gray-900"><?= $avocat['name'] ?></p>
                                        <p class="text-xs text-gray-500">Avocat</p>
                                    </div>
                                </div>
                            </td>
                            <td><?= $avocat['city'] ?></td>
                            <td>
                                <span class="badge badge-primary"><?= $avocat['specialites'] ?></span>
                            </td>
                            <td><?= $avocat['annees_experience'] ?> ans</td>
                            <td class="font-semibold text-blue-900"><?= number_format($avocat['tarif_horaire']) ?> DH</td>
                            <td>
                                <div class="flex gap-2">
                                    <a href="/admin/professional/profile?type=avocat&id=<?= $avocat['id'] ?>" class="flex-1">
                                        <button class="w-full bg-gradient-to-r from-blue-400 to-indigo-500 text-white px-5 py-2.5 mt-4 rounded-xl font-semibold hover:scale-105 hover:shadow-lg transition flex items-center justify-center gap-2" title="Voir profil">
                                            <i class="fas fa-user"></i>
                                        </button>
                                    </a>
                                    <a href="/avocat/edit?id=<?= $avocat['id'] ?>" class="text-blue-600 hover:text-blue-800">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="/avocat/delete?id=<?= $avocat['id'] ?>" class="text-red-600 hover:text-red-800" onclick="return confirm('Êtes-vous sûr ?')">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="bg-gray-50 px-6 py-4 border-t border-gray-200">
            <div class="flex items-center justify-center gap-3">
                <?php if ($page > 1): ?>
                    <a href="?page=<?= $page - 1 ?>" class="btn-action btn-secondary">
                        <i class="fas fa-arrow-left mr-2"></i>
                        Précédent
                    </a>
                <?php endif; ?>

                <?php if ($page < $totalPages): ?>
                    <a href="?page=<?= $page + 1 ?>" class="btn-action btn-secondary">
                        Suivant
                        <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>