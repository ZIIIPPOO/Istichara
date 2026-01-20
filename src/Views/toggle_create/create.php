<div class="py-6 px-4 sm:px-6 lg:px-8">
    <div class="max-w-3xl mx-auto">
        <!-- Header -->
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-900">Ajouter un Professionnel</h1>
            <p class="mt-2 text-sm text-gray-600">Créez un nouveau professionnel sur la plateforme ISTICHARA</p>
        </div>

        <!-- Form Card -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <form action="/professionnel/create" method="POST">
                <div class="p-8 space-y-6">

                    <!-- Toggle Avocat / Huissier -->
                    <div class="border-b border-gray-200 pb-6">
                        <h2 class="text-xl font-semibold text-gray-900 mb-4 flex items-center">
                            <i class="fas fa-user-tag text-amber-600 mr-2"></i>
                            Type de Professionnel
                        </h2>
                        <div class="flex gap-4">
                            <button type="button" id="btnAvocat" onclick="selectType('avocat')"
                                class="flex-1 py-3 px-6 rounded-lg font-semibold transition bg-gray-200 text-gray-700">
                                <i class="fas fa-user-tie mr-2"></i>
                                Avocat
                            </button>
                            <button type="button" id="btnHuissier" onclick="selectType('huissier')"
                                class="flex-1 py-3 px-6 rounded-lg font-semibold transition bg-gray-200 text-gray-700 hover:bg-gray-300">
                                <i class="fas fa-gavel mr-2"></i>
                                Huissier
                            </button>
                        </div>
                        <input type="hidden" name="type" id="typeInput" value="avocat">
                    </div>

                    <!-- Informations Générales -->
                    <div class="border-b border-gray-200 pb-6">
                        <h2 class="text-xl font-semibold text-gray-900 mb-4 flex items-center">
                            <i class="fas fa-user-circle text-amber-600 mr-2"></i>
                            Informations Générales
                        </h2>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="nom" class="block text-sm font-medium text-gray-700 mb-2">
                                    Nom <span class="text-red-500">*</span>
                                </label>
                                <input type="text" id="nom" name="nom" required
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-900 focus:border-transparent"
                                    placeholder="ex: Alami">
                            </div>

                            <div>
                                <label for="ville" class="block text-sm font-medium text-gray-700 mb-2">
                                    Ville <span class="text-red-500">*</span>
                                </label>
                                <select id="ville" name="ville" required
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-900 focus:border-transparent">
                                    <option value="">Sélectionner une ville</option>
                                    <?php foreach ($cities as $c): ?>
                                        <option value="<?= htmlspecialchars($c['name']) ?>"><?= htmlspecialchars($c['name']) ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div>
                                <label for="experience" class="block text-sm font-medium text-gray-700 mb-2">
                                    Années d'Expérience <span class="text-red-500">*</span>
                                </label>
                                <input type="number" id="experience" name="annees_experience" min="0" required
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-900 focus:border-transparent"
                                    placeholder="ex: 10">
                            </div>

                            <div>
                                <label for="tarif" class="block text-sm font-medium text-gray-700 mb-2">
                                    Tarif Horaire (DH) <span class="text-red-500">*</span>
                                </label>
                                <input type="number" id="tarif" name="tarif_horaire" min="0" step="50" required
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-900 focus:border-transparent"
                                    placeholder="ex: 500">
                            </div>
                        </div>
                    </div>

                    <!-- Champs Avocat -->
                    <div id="avocatFields" class="border-b border-gray-200 pb-6">
                        <h2 class="text-xl font-semibold text-gray-900 mb-4 flex items-center">
                            <i class="fas fa-briefcase text-amber-600 mr-2"></i>
                            Informations Avocat
                        </h2>

                        <div class="space-y-6">
                            <div>
                                <label for="specialites" class="block text-sm font-medium text-gray-700 mb-2">
                                    Spécialités <span class="text-red-500">*</span>
                                </label>
                                <input type="text" id="specialites" name="specialites"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-900 focus:border-transparent"
                                    placeholder="ex: Droit pénal, Droit civil">
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-3">
                                    Consultation en Ligne
                                </label>
                                <div class="flex items-center space-x-6">
                                    <label class="flex items-center space-x-2 cursor-pointer">
                                        <input type="radio" name="consultation_en_ligne" value="1" checked
                                            class="w-4 h-4 text-blue-900 focus:ring-blue-900">
                                        <span class="text-sm text-gray-700">Oui</span>
                                    </label>
                                    <label class="flex items-center space-x-2 cursor-pointer">
                                        <input type="radio" name="consultation_en_ligne" value="0"
                                            class="w-4 h-4 text-blue-900 focus:ring-blue-900">
                                        <span class="text-sm text-gray-700">Non</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Champs Huissier (caché par défaut) -->
                    <div id="huissierFields" class="border-b border-gray-200 pb-6" style="display: none;">
                        <h2 class="text-xl font-semibold text-gray-900 mb-4 flex items-center">
                            <i class="fas fa-gavel text-amber-600 mr-2"></i>
                            Informations Huissier
                        </h2>

                        <div>
                            <label for="types_actes" class="block text-sm font-medium text-gray-700 mb-2">
                                Types d'Actes <span class="text-red-500">*</span>
                            </label>
                            <input type="text" id="types_actes" name="types_actes"
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-900 focus:border-transparent"
                                placeholder="ex: Signification, Exécution, Constats">
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex items-center justify-end space-x-4 pt-6">
                        <a href="/avocats" class="btn-action btn-secondary">
                            <i class="fas fa-times"></i>
                            Annuler
                        </a>
                        <button type="submit" class="btn-action btn-primary">
                            <i class="fas fa-save"></i>
                            Enregistrer
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function selectType(type) {
        document.getElementById('typeInput').value = type;

        if (type === 'avocat') {
            document.getElementById('avocatFields').style.display = 'block';
            document.getElementById('huissierFields').style.display = 'none';
            document.getElementById('btnHuissier').style.backgroundColor = 'white';
            document.getElementById('btnAvocat').style.backgroundColor = 'blue';
        } else {
            document.getElementById('avocatFields').style.display = 'none';
            document.getElementById('huissierFields').style.display = 'block';
            document.getElementById('btnHuissier').style.backgroundColor = 'blue';
            document.getElementById('btnAvocat').style.backgroundColor = 'white';
        }
    }
</script>