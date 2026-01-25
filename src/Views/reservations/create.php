<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<div class="min-h-screen flex items-center justify-center bg-gray-100">
    <div class="w-full max-w-lg bg-white rounded-lg shadow-lg p-8">
                    <?php if (!empty($error_msg)): ?>
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                    <?php foreach ($error_msg as $msg): ?>
                        <p><?= $msg ?></p>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        <form action="/reservation/disponibilite" method="POST">

            <!-- TYPE -->
            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-700 mb-3">
                    1. Type de professionnel <span class="text-red-500">*</span>
                </label>
                <div class="flex gap-4">
                    <label class="cursor-pointer">
                        <input type="radio"
                               name="type"
                               value="avocat"
                               checked
                               onchange="showType('avocat')">
                        <span class="ml-2 font-semibold">Avocat</span>
                    </label>

                    <label class="cursor-pointer">
                        <input type="radio"
                               name="type"
                               value="huissier"
                               onchange="showType('huissier')">
                        <span class="ml-2 font-semibold">Huissier</span>
                    </label>
                </div>
            </div>

            <!-- AVOCAT SELECT -->
            <div id="avocat_section" class="mb-6">
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    2. Choisir un avocat <span class="text-red-500">*</span>
                </label>
                <select name="prof_id"
                        id="avocat_select"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg">
                    <option value="">-- Sélectionnez un avocat --</option>
                    <?php foreach ($avocats as $avocat): ?>
                        <option value="<?= $avocat['user_id'] ?>">
                            <?= htmlspecialchars($avocat['name']) ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <!-- HUISSIER SELECT -->
            <div id="huissier_section" class="mb-6" style="display:none;">
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    2. Choisir un huissier <span class="text-red-500">*</span>
                </label>
                <select name="prof_id"
                        id="huissier_select"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg"
                        disabled>
                    <option value="">-- Sélectionnez un huissier --</option>
                    <?php foreach ($huissiers as $huissier): ?>
                        <option value="<?= $huissier['user_id'] ?>">
                            <?= htmlspecialchars($huissier['name']) ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <button type="submit"
                    class="w-full px-6 py-3 bg-blue-900 text-white rounded-lg font-semibold hover:bg-blue-800">
                Select
            </button>

        </form>

    </div>
</div>

<script>
function showType(type) {
    const avocatSection = document.getElementById('avocat_section');
    const huissierSection = document.getElementById('huissier_section');

    const avocatSelect = document.getElementById('avocat_select');
    const huissierSelect = document.getElementById('huissier_select');

    if (type === 'avocat') {
        avocatSection.style.display = 'block';
        huissierSection.style.display = 'none';

        avocatSelect.disabled = false;
        huissierSelect.disabled = true;
        huissierSelect.value = '';
    } else {
        avocatSection.style.display = 'none';
        huissierSection.style.display = 'block';

        avocatSelect.disabled = true;
        huissierSelect.disabled = false;
        avocatSelect.value = '';
    }
}
</script>
