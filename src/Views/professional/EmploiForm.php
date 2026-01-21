<section class="py-6 px-4 sm:px-6 lg:px-8">
    <?php if (isset($success)): ?>
        <div class="mb-6 p-4 bg-green-100 text-green-800 rounded-md">
            <?= $success ?>
        </div>
    <?php endif; ?>

    <form action="" method="POST" class="availability-form mb-8">
        <h1 class="text-2xl font-display font-semibold mb-4">Ajouter une disponibilité</h1>

        <input type="hidden" name="user_id" value="<?= $_SESSION['user_id'] ?>">

        <div class="mb-4">
            <label for="jour_semaine" class="block font-medium mb-2">Jour de la semaine</label>
            <select id="jour_semaine" name="jour_semaine" class="w-full p-3 border border-slate-300 rounded-md" required>
                <option value="">Sélectionnez un jour</option>
                <option value="lundi">Lundi</option>
                <option value="mardi">Mardi</option>
                <option value="mercredi">Mercredi</option>
                <option value="jeudi">Jeudi</option>
                <option value="vendredi">Vendredi</option>
                <option value="samedi">Samedi</option>
                <option value="dimanche">Dimanche</option>
            </select>
        </div>

        <div class="mb-4">
            <label for="heure_debut" class="block font-medium mb-2">Heure de début</label>
            <input type="time" id="heure_debut" name="heure_debut" class="w-full p-3 border border-slate-300 rounded-md" required>
        </div>

        <div class="mb-4">
            <label for="heure_fin" class="block font-medium mb-2">Heure de fin</label>
            <input type="time" id="heure_fin" name="heure_fin" class="w-full p-3 border border-slate-300 rounded-md" required>
        </div>

        <div class="mb-6 flex items-center gap-2">
            <input type="checkbox" id="is_active" name="is_active" value="1" checked class="accent-primary-500">
            <label for="is_active" class="font-medium">Actif</label>
        </div>

        <button type="submit" class="bg-primary-500 text-white px-6 py-3 rounded-full font-semibold shadow-primary-md hover:shadow-primary-lg transition">
            Enregistrer
        </button>
    </form>

    <!-- Display existing disponibilités -->
    <h2 class="text-xl font-semibold mb-4">Vos disponibilités</h2>
    <table class="w-full text-left border-collapse">
        <thead>
            <tr class="bg-slate-200">
                <th class="p-2 border">Jour</th>
                <th class="p-2 border">Début</th>
                <th class="p-2 border">Fin</th>
                <th class="p-2 border">Actif</th>
                <th class="p-2 border">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dispos as $d): ?>
                <tr class="border-b">
                    <td class="p-2"><?= ucfirst($d['jour_semaine']) ?></td>
                    <td class="p-2"><?= $d['heure_debut'] ?></td>
                    <td class="p-2"><?= $d['heure_fin'] ?></td>
                    <td class="p-2"><?= $d['is_active'] ? 'Oui' : 'Non' ?></td>
                    <td class="p-2">
                        <a href="/emploi/edit?id=<?= $d['id'] ?>" class="text-blue-600 hover:underline">Modifier</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            <?php if (empty($dispos)) echo '<tr><td colspan="5" class="p-2 text-center text-slate-500">Aucune disponibilité</td></tr>'; ?>
        </tbody>
    </table>
</section>
