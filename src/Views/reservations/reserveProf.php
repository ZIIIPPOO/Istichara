<div class="min-h-screen flex items-center justify-center bg-gray-100">
    <div class="w-full max-w-3xl bg-white p-8 rounded-lg shadow-lg">

        <?php if (!empty($getDispo)): ?>

            <h2 class="text-xl font-semibold mb-6 text-center">
                Disponibilités du cette professionnel
            </h2>
            <?php if (!empty($error_msg)): ?>
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                    <?php foreach ($error_msg as $msg): ?>
                        <p><?= $msg ?></p>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
            <table class="w-full text-left border-collapse mb-8">
                <thead>
                    <tr class="bg-slate-200">
                        <th class="p-2 border">Jour</th>
                        <th class="p-2 border">Début</th>
                        <th class="p-2 border">Fin</th>
                        <th class="p-2 border">Actif</th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($getDispo as $d): ?>
                        <input type="text" value="<?= $type ?>" name="type" hidden>
                        <tr class="border-b">
                            <td class="p-2"><?= ucfirst($d['jour_semaine']) ?></td>

                            <?php
                            // Convertir en AM/PM
                            $heureDebut = (new DateTime($d['heure_debut']))->format('g:i A');
                            $heureFin   = (new DateTime($d['heure_fin']))->format('g:i A');
                            ?>

                            <td class="p-2"><?= $heureDebut ?></td>
                            <td class="p-2"><?= $heureFin ?></td>
                            <td class="p-2"><?= $d['is_active'] ? 'Oui' : 'Non' ?></td>
                        </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>

            <!-- DATE / TIME / MOTIF -->
            <form action="/reservations/create" method="POST">
                <input type="hidden" name="prof_id" value="<?= $prof_id ?>">
                <input type="hidden" name="type" value="<?= $type ?>">
                <div class="mb-6">
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        3. Jour <span class="text-red-500">*</span>
                    </label>
                    <select name="jour_semaine"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg"
                        required>
                        <?php foreach ($getDispo as $d): ?>
                            <option value="<?= $d['jour_semaine'] ?>"><?= $d['jour_semaine'] ?></option>
                        <?php endforeach; ?>
                    </select>

                </div>

                <div class="mb-6">
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        4. Heure <span class="text-red-500">*</span>
                    </label>
                    <div class="grid grid-cols-2 gap-4">
                        <input type="time"
                            name="heure_debut"
                            required
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg">

                        <input type="time"
                            name="heure_fin"
                            required
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg">
                    </div>
                </div>

                <div class="mb-6">
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        5. Motif <span class="text-red-500">*</span>
                    </label>
                    <textarea name="motif"
                        rows="4"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg"
                        placeholder="Décrivez votre besoin..."
                        required></textarea>
                </div>

                <button type="submit"
                    class="w-full px-6 py-3 bg-blue-900 text-white rounded-lg font-semibold hover:bg-blue-800">
                    Envoyer la demande
                </button>
            </form>

        <?php endif; ?>

    </div>
</div>