<div class="py-6 px-4 sm:px-6 lg:px-8">
    <div class="max-w-3xl mx-auto">
        <!-- Header -->
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-900">Modifier l'Avocat</h1>
            <p class="mt-2 text-sm text-gray-600">Mettez à jour les informations de l'avocat</p>
        </div>

        <!-- Form Card -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <form action="/avocat/update" method="POST">
                <input type="hidden" name="id" value="<?= $_GET['id'] ?? '' ?>">
                
                <div class="p-8 space-y-6">
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
                                <input type="text" id="nom" name="nom" required value="Alami"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-900 focus:border-transparent">
                            </div>

                            <div>
                                <label for="prenom" class="block text-sm font-medium text-gray-700 mb-2">
                                    Prénom <span class="text-red-500">*</span>
                                </label>
                                <input type="text" id="prenom" name="prenom" required value="Ahmed"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-900 focus:border-transparent">
                            </div>

                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                                    Email <span class="text-red-500">*</span>
                                </label>
                                <input type="email" id="email" name="email" required value="ahmed.alami@example.com"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-900 focus:border-transparent">
                            </div>

                            <div>
                                <label for="telephone" class="block text-sm font-medium text-gray-700 mb-2">
                                    Téléphone <span class="text-red-500">*</span>
                                </label>
                                <input type="tel" id="telephone" name="telephone" required value="+212 612345678"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-900 focus:border-transparent">
                            </div>

                            <div>
                                <label for="ville" class="block text-sm font-medium text-gray-700 mb-2">
                                    Ville <span class="text-red-500">*</span>
                                </label>
                                <select id="ville" name="ville" required 
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-900 focus:border-transparent">
                                    <option value="Casablanca" selected>Casablanca</option>
                                    <option value="Rabat">Rabat</option>
                                    <option value="Marrakech">Marrakech</option>
                                    <option value="Fès">Fès</option>
                                    <option value="Tanger">Tanger</option>
                                    <option value="Agadir">Agadir</option>
                                </select>
                            </div>

                            <div>
                                <label for="experience" class="block text-sm font-medium text-gray-700 mb-2">
                                    Années d'Expérience <span class="text-red-500">*</span>
                                </label>
                                <input type="number" id="experience" name="annees_experience" min="0" required value="15"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-900 focus:border-transparent">
                            </div>
                        </div>
                    </div>

                    <!-- Informations Professionnelles -->
                    <div class="border-b border-gray-200 pb-6">
                        <h2 class="text-xl font-semibold text-gray-900 mb-4 flex items-center">
                            <i class="fas fa-briefcase text-amber-600 mr-2"></i>
                            Informations Professionnelles
                        </h2>

                        <div class="space-y-6">
                            <!-- Spécialités -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-3">
                                    Spécialités <span class="text-red-500">*</span>
                                </label>
                                <div class="grid grid-cols-2 md:grid-cols-3 gap-3">
                                    <label class="flex items-center space-x-2 cursor-pointer">
                                        <input type="checkbox" name="specialites[]" value="Droit pénal" checked
                                            class="w-4 h-4 text-blue-900 rounded focus:ring-blue-900">
                                        <span class="text-sm text-gray-700">Droit pénal</span>
                                    </label>
                                    <label class="flex items-center space-x-2 cursor-pointer">
                                        <input type="checkbox" name="specialites[]" value="Droit civil" checked
                                            class="w-4 h-4 text-blue-900 rounded focus:ring-blue-900">
                                        <span class="text-sm text-gray-700">Droit civil</span>
                                    </label>
                                    <label class="flex items-center space-x-2 cursor-pointer">
                                        <input type="checkbox" name="specialites[]" value="Droit de la famille" 
                                            class="w-4 h-4 text-blue-900 rounded focus:ring-blue-900">
                                        <span class="text-sm text-gray-700">Droit de la famille</span>
                                    </label>
                                </div>
                            </div>

                            <!-- Tarif horaire -->
                            <div>
                                <label for="tarif" class="block text-sm font-medium text-gray-700 mb-2">
                                    Tarif Horaire (DH) <span class="text-red-500">*</span>
                                </label>
                                <input type="number" id="tarif" name="tarif_horaire" min="0" step="50" required value="600"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-900 focus:border-transparent">
                            </div>

                            <!-- Consultation en ligne -->
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

                    <!-- Biographie -->
                    <div>
                        <label for="biographie" class="block text-sm font-medium text-gray-700 mb-2">
                            Biographie
                        </label>
                        <textarea id="biographie" name="biographie" rows="4"
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-900 focus:border-transparent resize-none">Avocat expérimenté spécialisé en droit pénal et civil avec 15 ans d'expérience.</textarea>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex items-center justify-end space-x-4 pt-6">
                        <a href="/avocats" class="px-6 py-2.5 border border-gray-300 rounded-md text-gray-700 font-medium hover:bg-gray-50">
                            Annuler
                        </a>
                        <button type="submit" class="btn-action btn-primary shadow-lg">
                            <i class="fas fa-save"></i>
                            Mettre à jour
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>