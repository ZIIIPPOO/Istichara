<div class="py-6 px-4 sm:px-6 lg:px-8">
    <div class="max-w-2xl mx-auto">
        
        <!-- Header -->
        <div class="mb-8 text-center">
            <h1 class="text-3xl font-bold text-gray-900">Réserver une Consultation</h1>
        </div>

        <!-- Form -->
        <div class="bg-white rounded-lg shadow-lg p-8">
            
            <form action="/reservations/create" method="POST">
                
                <!-- TYPE: Avocat or Huissier (Radio buttons) -->
                <div class="mb-6">
                    <label class="block text-sm font-medium text-gray-700 mb-3">
                        1. Type de professionnel <span class="text-red-500">*</span>
                    </label>
                    <div class="flex gap-4">
                        <label class="cursor-pointer">
                            <input type="radio" name="type" value="avocat" checked onchange="showType('avocat')">
                            <span class="ml-2 font-semibold">Avocat</span>
                        </label>
                        <label class="cursor-pointer">
                            <input type="radio" name="type" value="huissier" onchange="showType('huissier')">
                            <span class="ml-2 font-semibold">Huissier</span>
                        </label>
                    </div>
                </div>

                <!-- AVOCAT DROPDOWN (shown by default) -->
                <div id="avocat_section" class="mb-6">
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        2. Choisir un avocat <span class="text-red-500">*</span>
                    </label>
                    <select name="avocat_id" class="w-full px-4 py-3 border border-gray-300 rounded-lg">
                        <option value="">-- Sélectionnez un avocat --</option>
                        <?php foreach ($avocats as $avocat): ?>
                            <option value="<?= $avocat['id'] ?>">
                                <?= $avocat['name'] ?> - <?= $avocat['city'] ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <!-- HUISSIER DROPDOWN (hidden by default) -->
                <div id="huissier_section" class="mb-6" style="display: none;">
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        2. Choisir un huissier <span class="text-red-500">*</span>
                    </label>
                    <select name="huissier_id" class="w-full px-4 py-3 border border-gray-300 rounded-lg">
                        <option value="">-- Sélectionnez un huissier --</option>
                        <?php foreach ($huissiers as $huissier): ?>
                            <option value="<?= $huissier['id'] ?>">
                                <?= $huissier['name'] ?> - <?= $huissier['city'] ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <!-- DATE -->
                <div class="mb-6">
                    <label for="date_reservation" class="block text-sm font-medium text-gray-700 mb-2">
                        3. Date <span class="text-red-500">*</span>
                    </label>
                    <input type="date" name="date_reservation" required min="<?= date('Y-m-d') ?>"
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg">
                </div>

                <!-- TIME -->
                <div class="mb-6">
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        4. Heure <span class="text-red-500">*</span>
                    </label>
                    <div class="grid grid-cols-2 gap-4">
                        <input type="time" name="heure_debut" required 
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg">
                        <input type="time" name="heure_fin" required 
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg">
                    </div>
                </div>

                <!-- MOTIF -->
                <div class="mb-6">
                    <label for="motif" class="block text-sm font-medium text-gray-700 mb-2">
                        5. Motif <span class="text-red-500">*</span>
                    </label>
                    <textarea name="motif" required rows="4"
                              class="w-full px-4 py-3 border border-gray-300 rounded-lg"
                              placeholder="Décrivez votre besoin..."></textarea>
                </div>

                <!-- SUBMIT -->
                <button type="submit" 
                        class="w-full px-6 py-3 bg-blue-900 text-white rounded-lg font-semibold hover:bg-blue-800">
                    Envoyer la demande
                </button>
            </form>
        </div>
    </div>
</div>
<script>
function showType(type) {
    if (type === 'avocat') {
        document.getElementById('avocat_section').style.display = 'block';
        document.getElementById('huissier_section').style.display = 'none';
    } else {
        document.getElementById('avocat_section').style.display = 'none';
        document.getElementById('huissier_section').style.display = 'block';
    }
}
</script>