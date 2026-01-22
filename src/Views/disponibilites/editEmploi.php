    <?php 
    // var_dump($_GET);
    // echo "<pre>";
    // var_dump($dispoRowData);
    // echo "</pre>";
    // var_dump($dispoRow_id);

    ?>
    <section class="py-6 px-4 sm:px-6 lg:px-8">
    <form action="" method="POST" class="availability-form mb-8">
        <h1 class="text-2xl font-display font-semibold mb-4">Modifier une disponibilité</h1>

        <input type="hidden" name="dispoRow_id" value="<?= $dispoRow_id?>">

        <div class="mb-4">
            <label for="jour_semaine" class="block font-medium mb-2">Jour de la semaine</label>
            <select id="jour_semaine" name="jour_semaine" class="w-full p-3 border border-slate-300 rounded-md" required>
                <option value="<?=  $dispoRowData['jour_semaine'] ?>"><?=  $dispoRowData['jour_semaine'] ?></option>
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
            <input type="time" value="<?= $dispoRowData['heure_debut'] ?>" id="heure_debut" name="heure_debut" class="w-full p-3 border border-slate-300 rounded-md" required>
        </div>

        <div class="mb-4">
            <label for="heure_fin" class="block font-medium mb-2">Heure de fin</label>
            <input type="time" value="<?= $dispoRowData['heure_fin'] ?>" id="heure_fin" name="heure_fin" class="w-full p-3 border border-slate-300 rounded-md" required>
        </div>

        <div class="mb-6 flex items-center gap-2">
            <input type="checkbox" value="<?= $dispoRowData['is_active'] ?>" id="is_active" name="is_active" value="1" checked class="accent-primary-500">
            <label for="is_active" class="font-medium">Actif</label>
        </div>

        <button type="submit" class="bg-primary-500 text-black px-6 py-3 rounded-full font-semibold shadow-primary-md hover:shadow-primary-lg transition">
            Enregistrer Modification
        </button>
    </form>
    </section>