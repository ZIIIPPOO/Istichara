<!DOCTYPE html>
<html lang="fr" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription Professionnel - ISTICHARA</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body class="min-h-full bg-gray-50">
    <!-- Header -->
    <header class="bg-blue-900 text-white py-4 px-6 shadow-lg">
        <div class="max-w-5xl mx-auto flex items-center justify-between">
            <div class="flex items-center">
                <i class="fas fa-balance-scale text-amber-500 text-2xl mr-3"></i>
                <span class="text-xl font-bold">ISTICHARA</span>
            </div>
            <a href="/login" class="text-blue-200 hover:text-white transition">
                <i class="fas fa-sign-in-alt mr-2"></i>Déjà inscrit ?
            </a>
        </div>
    </header>

    <main class="py-10 px-4">
        <div class="max-w-3xl mx-auto">
            <!-- Title -->
            <div class="text-center mb-10">
                <h1 class="text-3xl font-bold text-gray-900">Inscription Professionnel</h1>
                <p class="text-gray-600 mt-2">Rejoignez notre réseau de professionnels juridiques</p>
            </div>

            <!-- Progress Steps -->
            <div class="mb-10">
                <div class="flex items-center justify-center">
                    <!-- Step 1 -->
                    <div class="flex items-center">
                        <div class="step-circle active" id="step1-circle">
                            <span>1</span>
                        </div>
                        <span class="ml-2 text-sm font-medium text-blue-900" id="step1-text">Informations</span>
                    </div>
                    
                    <div class="w-20 h-1 mx-4 bg-gray-300 rounded" id="progress1">
                        <div class="h-full bg-blue-900 rounded transition-all duration-500" style="width: 0%"></div>
                    </div>
                    
                    <!-- Step 2 -->
                    <div class="flex items-center">
                        <div class="step-circle" id="step2-circle">
                            <span>2</span>
                        </div>
                        <span class="ml-2 text-sm font-medium text-gray-400" id="step2-text">Documents</span>
                    </div>
                    
                    <div class="w-20 h-1 mx-4 bg-gray-300 rounded" id="progress2">
                        <div class="h-full bg-blue-900 rounded transition-all duration-500" style="width: 0%"></div>
                    </div>
                    
                    <!-- Step 3 -->
                    <div class="flex items-center">
                        <div class="step-circle" id="step3-circle">
                            <span>3</span>
                        </div>
                        <span class="ml-2 text-sm font-medium text-gray-400" id="step3-text">Révision</span>
                    </div>
                </div>
            </div>

            <!-- Form Container -->
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
                <form action="/register/professional" method="POST" enctype="multipart/form-data" id="registrationForm">
                    
                    <!-- STEP 1: Informations Personnelles -->
                    <div class="step-content p-8" id="step1">
                        <h2 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                            <i class="fas fa-user-circle text-amber-600 mr-3"></i>
                            Informations Personnelles
                        </h2>

                        <!-- Type de professionnel -->
                        <div class="mb-8">
                            <label class="block text-sm font-medium text-gray-700 mb-3">
                                Type de Professionnel <span class="text-red-500">*</span>
                            </label>
                            <div class="grid grid-cols-2 gap-4">
                                <label class="relative cursor-pointer">
                                    <input type="radio" name="type" value="avocat" class="peer sr-only" checked>
                                    <div class="p-6 border-2 border-gray-200 rounded-xl text-center peer-checked:border-blue-900 peer-checked:bg-blue-50 transition">
                                        <i class="fas fa-user-tie text-3xl text-blue-900 mb-2"></i>
                                        <p class="font-semibold text-gray-900">Avocat</p>
                                        <p class="text-sm text-gray-500">Barreau du Maroc</p>
                                    </div>
                                </label>
                                <label class="relative cursor-pointer">
                                    <input type="radio" name="type" value="huissier" class="peer sr-only">
                                    <div class="p-6 border-2 border-gray-200 rounded-xl text-center peer-checked:border-blue-900 peer-checked:bg-blue-50 transition">
                                        <i class="fas fa-gavel text-3xl text-amber-600 mb-2"></i>
                                        <p class="font-semibold text-gray-900">Huissier</p>
                                        <p class="text-sm text-gray-500">Huissier de Justice</p>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <!-- Nom & Email -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label for="nom" class="block text-sm font-medium text-gray-700 mb-2">
                                    Nom Complet <span class="text-red-500">*</span>
                                </label>
                                <input type="text" id="nom" name="nom" required
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-900 focus:border-transparent"
                                    placeholder="Me. Alami Mohamed">
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                                    Email Professionnel <span class="text-red-500">*</span>
                                </label>
                                <input type="email" id="email" name="email" required
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-900 focus:border-transparent"
                                    placeholder="contact@cabinet.ma">
                            </div>
                        </div>

                        <!-- Téléphone & Ville -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label for="telephone" class="block text-sm font-medium text-gray-700 mb-2">
                                    Téléphone <span class="text-red-500">*</span>
                                </label>
                                <input type="tel" id="telephone" name="telephone" required
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-900 focus:border-transparent"
                                    placeholder="06 12 34 56 78">
                            </div>
                            <div>
                                <label for="ville" class="block text-sm font-medium text-gray-700 mb-2">
                                    Ville <span class="text-red-500">*</span>
                                </label>
                                <select id="ville" name="ville" required
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-900 focus:border-transparent">
                                    <option value="">Sélectionner une ville</option>
                                    <option value="Casablanca">Casablanca</option>
                                    <option value="Rabat">Rabat</option>
                                    <option value="Marrakech">Marrakech</option>
                                    <option value="Fès">Fès</option>
                                    <option value="Tanger">Tanger</option>
                                    <option value="Agadir">Agadir</option>
                                </select>
                            </div>
                        </div>

                        <!-- Spécialités (Avocat) / Types d'actes (Huissier) -->
                        <div class="mb-6" id="specialitesField">
                            <label for="specialites" class="block text-sm font-medium text-gray-700 mb-2">
                                Spécialités <span class="text-red-500">*</span>
                            </label>
                            <input type="text" id="specialites" name="specialites"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-900 focus:border-transparent"
                                placeholder="Droit pénal, Droit des affaires, Droit de la famille">
                        </div>

                        <div class="mb-6 hidden" id="typeActesField">
                            <label for="type_actes" class="block text-sm font-medium text-gray-700 mb-2">
                                Types d'Actes <span class="text-red-500">*</span>
                            </label>
                            <input type="text" id="type_actes" name="type_actes"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-900 focus:border-transparent"
                                placeholder="Signification, Exécution, Constats">
                        </div>

                        <!-- Expérience & Tarif -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label for="experience" class="block text-sm font-medium text-gray-700 mb-2">
                                    Années d'Expérience <span class="text-red-500">*</span>
                                </label>
                                <input type="number" id="experience" name="annees_experience" min="0" required
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-900 focus:border-transparent"
                                    placeholder="10">
                            </div>
                            <div>
                                <label for="tarif" class="block text-sm font-medium text-gray-700 mb-2">
                                    Tarif Horaire (DH) <span class="text-red-500">*</span>
                                </label>
                                <input type="number" id="tarif" name="tarif_horaire" min="0" step="50" required
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-900 focus:border-transparent"
                                    placeholder="500">
                            </div>
                        </div>

                        <!-- Password -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label for="password" class="block text-sm font-medium text-gray-700 mb-2">
                                    Mot de passe <span class="text-red-500">*</span>
                                </label>
                                <input type="password" id="password" name="password" required minlength="8"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-900 focus:border-transparent"
                                    placeholder="Minimum 8 caractères">
                            </div>
                            <div>
                                <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-2">
                                    Confirmer <span class="text-red-500">*</span>
                                </label>
                                <input type="password" id="password_confirmation" name="password_confirmation" required
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-900 focus:border-transparent"
                                    placeholder="Confirmez le mot de passe">
                            </div>
                        </div>

                        <!-- Consultation en ligne (Avocat only) -->
                        <div class="mb-6" id="consultationField">
                            <label class="block text-sm font-medium text-gray-700 mb-3">
                                Consultation en Ligne
                            </label>
                            <div class="flex items-center space-x-6">
                                <label class="flex items-center space-x-2 cursor-pointer">
                                    <input type="radio" name="consultation_en_ligne" value="1" checked
                                        class="w-4 h-4 text-blue-900 focus:ring-blue-900">
                                    <span class="text-gray-700">Oui, je propose des consultations en ligne</span>
                                </label>
                                <label class="flex items-center space-x-2 cursor-pointer">
                                    <input type="radio" name="consultation_en_ligne" value="0"
                                        class="w-4 h-4 text-blue-900 focus:ring-blue-900">
                                    <span class="text-gray-700">Non</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- STEP 2: Documents -->
                    <div class="step-content p-8 hidden" id="step2">
                        <h2 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                            <i class="fas fa-file-upload text-amber-600 mr-3"></i>
                            Documents Justificatifs
                        </h2>

                        <div class="bg-amber-50 border border-amber-200 rounded-lg p-4 mb-8">
                            <div class="flex items-start">
                                <i class="fas fa-info-circle text-amber-600 mt-1 mr-3"></i>
                                <div>
                                    <p class="font-medium text-amber-800">Documents requis</p>
                                    <p class="text-sm text-amber-700 mt-1">
                                        Veuillez télécharger les documents suivants pour vérification. 
                                        Formats acceptés: PDF, JPG, PNG (max 5MB par fichier)
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Carte Professionnelle -->
                        <div class="mb-6">
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                Carte Professionnelle <span class="text-red-500">*</span>
                            </label>
                            <div class="upload-zone" id="uploadZone1">
                                <input type="file" name="carte_professionnelle" id="carte_pro" class="hidden" accept=".pdf,.jpg,.jpeg,.png">
                                <label for="carte_pro" class="cursor-pointer flex flex-col items-center justify-center p-8 border-2 border-dashed border-gray-300 rounded-xl hover:border-blue-900 hover:bg-blue-50 transition">
                                    <i class="fas fa-cloud-upload-alt text-4xl text-gray-400 mb-3"></i>
                                    <p class="text-gray-600 font-medium">Cliquez pour télécharger</p>
                                    <p class="text-sm text-gray-400 mt-1">ou glissez-déposez votre fichier</p>
                                    <p class="text-xs text-gray-400 mt-2" id="fileName1">PDF, JPG ou PNG - Max 5MB</p>
                                </label>
                            </div>
                        </div>

                        <!-- Diplôme -->
                        <div class="mb-6">
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                Diplôme / Attestation <span class="text-red-500">*</span>
                            </label>
                            <div class="upload-zone" id="uploadZone2">
                                <input type="file" name="diplome" id="diplome" class="hidden" accept=".pdf,.jpg,.jpeg,.png">
                                <label for="diplome" class="cursor-pointer flex flex-col items-center justify-center p-8 border-2 border-dashed border-gray-300 rounded-xl hover:border-blue-900 hover:bg-blue-50 transition">
                                    <i class="fas fa-cloud-upload-alt text-4xl text-gray-400 mb-3"></i>
                                    <p class="text-gray-600 font-medium">Cliquez pour télécharger</p>
                                    <p class="text-sm text-gray-400 mt-1">ou glissez-déposez votre fichier</p>
                                    <p class="text-xs text-gray-400 mt-2" id="fileName2">PDF, JPG ou PNG - Max 5MB</p>
                                </label>
                            </div>
                        </div>

                        <!-- CIN -->
                        <div class="mb-6">
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                Carte d'Identité Nationale
                            </label>
                            <div class="upload-zone" id="uploadZone3">
                                <input type="file" name="cin" id="cin" class="hidden" accept=".pdf,.jpg,.jpeg,.png">
                                <label for="cin" class="cursor-pointer flex flex-col items-center justify-center p-8 border-2 border-dashed border-gray-300 rounded-xl hover:border-blue-900 hover:bg-blue-50 transition">
                                    <i class="fas fa-cloud-upload-alt text-4xl text-gray-400 mb-3"></i>
                                    <p class="text-gray-600 font-medium">Cliquez pour télécharger</p>
                                    <p class="text-sm text-gray-400 mt-1">ou glissez-déposez votre fichier</p>
                                    <p class="text-xs text-gray-400 mt-2" id="fileName3">PDF, JPG ou PNG - Max 5MB</p>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- STEP 3: Révision -->
                    <div class="step-content p-8 hidden" id="step3">
                        <h2 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                            <i class="fas fa-clipboard-check text-amber-600 mr-3"></i>
                            Révision et Confirmation
                        </h2>

                        <!-- Summary Card -->
                        <div class="bg-gray-50 rounded-xl p-6 mb-8">
                            <h3 class="font-semibold text-gray-900 mb-4">Résumé de votre inscription</h3>
                            
                            <div class="space-y-4">
                                <div class="flex justify-between py-2 border-b border-gray-200">
                                    <span class="text-gray-600">Type</span>
                                    <span class="font-medium text-gray-900" id="summary-type">Avocat</span>
                                </div>
                                <div class="flex justify-between py-2 border-b border-gray-200">
                                    <span class="text-gray-600">Nom</span>
                                    <span class="font-medium text-gray-900" id="summary-nom">-</span>
                                </div>
                                <div class="flex justify-between py-2 border-b border-gray-200">
                                    <span class="text-gray-600">Email</span>
                                    <span class="font-medium text-gray-900" id="summary-email">-</span>
                                </div>
                                <div class="flex justify-between py-2 border-b border-gray-200">
                                    <span class="text-gray-600">Ville</span>
                                    <span class="font-medium text-gray-900" id="summary-ville">-</span>
                                </div>
                                <div class="flex justify-between py-2 border-b border-gray-200">
                                    <span class="text-gray-600">Expérience</span>
                                    <span class="font-medium text-gray-900" id="summary-experience">-</span>
                                </div>
                                <div class="flex justify-between py-2">
                                    <span class="text-gray-600">Tarif Horaire</span>
                                    <span class="font-medium text-gray-900" id="summary-tarif">-</span>
                                </div>
                            </div>
                        </div>

                        <!-- Documents Status -->
                        <div class="bg-gray-50 rounded-xl p-6 mb-8">
                            <h3 class="font-semibold text-gray-900 mb-4">Documents téléchargés</h3>
                            <div class="space-y-3">
                                <div class="flex items-center justify-between">
                                    <span class="text-gray-600">Carte Professionnelle</span>
                                    <span class="text-green-600" id="doc-carte"><i class="fas fa-check-circle"></i> Téléchargé</span>
                                </div>
                                <div class="flex items-center justify-between">
                                    <span class="text-gray-600">Diplôme</span>
                                    <span class="text-green-600" id="doc-diplome"><i class="fas fa-check-circle"></i> Téléchargé</span>
                                </div>
                                <div class="flex items-center justify-between">
                                    <span class="text-gray-600">CIN</span>
                                    <span class="text-gray-400" id="doc-cin"><i class="fas fa-minus-circle"></i> Optionnel</span>
                                </div>
                            </div>
                        </div>

                        <!-- Info Box -->
                        <div class="bg-blue-50 border border-blue-200 rounded-lg p-4 mb-6">
                            <div class="flex items-start">
                                <i class="fas fa-info-circle text-blue-600 mt-1 mr-3"></i>
                                <div>
                                    <p class="font-medium text-blue-800">Validation requise</p>
                                    <p class="text-sm text-blue-700 mt-1">
                                        Votre compte sera activé après vérification de vos documents par notre équipe d'administration.
                                        Ce processus prend généralement 24 à 48 heures.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Terms -->
                        <div class="flex items-start mb-6">
                            <input type="checkbox" id="terms" name="terms" required
                                class="w-4 h-4 mt-1 text-blue-900 border-gray-300 rounded focus:ring-blue-900">
                            <label for="terms" class="ml-3 text-sm text-gray-600">
                                J'atteste sur l'honneur que les informations fournies sont exactes et j'accepte les 
                                <a href="/terms" class="text-blue-900 hover:underline">conditions d'utilisation</a> 
                                de la plateforme ISTICHARA.
                            </label>
                        </div>
                    </div>

                    <!-- Navigation Buttons -->
                    <div class="px-8 py-6 bg-gray-50 border-t border-gray-200 flex justify-between">
                        <button type="button" id="prevBtn" onclick="changeStep(-1)" class="hidden px-6 py-3 border border-gray-300 rounded-lg text-gray-700 font-medium hover:bg-gray-100 transition">
                            <i class="fas fa-arrow-left mr-2"></i>
                            Précédent
                        </button>
                        
                        <div class="ml-auto flex gap-3">
                            <a href="/login" class="px-6 py-3 border border-gray-300 rounded-lg text-gray-700 font-medium hover:bg-gray-100 transition">
                                Annuler
                            </a>
                            <button type="button" id="nextBtn" onclick="changeStep(1)" class="px-6 py-3 bg-blue-900 text-white rounded-lg font-semibold hover:bg-blue-800 transition">
                                Suivant
                                <i class="fas fa-arrow-right ml-2"></i>
                            </button>
                            <button type="submit" id="submitBtn" class="hidden px-6 py-3 bg-green-600 text-white rounded-lg font-semibold hover:bg-green-700 transition">
                                <i class="fas fa-paper-plane mr-2"></i>
                                Soumettre ma demande
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <style>
        .step-circle {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            background: #e5e7eb;
            color: #6b7280;
            transition: all 0.3s ease;
        }
        .step-circle.active {
            background: linear-gradient(135deg, #1e3a8a, #1e40af);
            color: white;
            box-shadow: 0 4px 14px rgba(30, 58, 138, 0.3);
        }
        .step-circle.completed {
            background: #10b981;
            color: white;
        }
        .upload-zone.has-file label {
            border-color: #10b981;
            background-color: #ecfdf5;
        }
        .upload-zone.has-file i {
            color: #10b981;
        }
    </style>

</body>
</html>