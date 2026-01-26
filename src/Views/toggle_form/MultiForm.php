<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription Multi-étapes</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-blue-900 to-blue-700 min-h-screen flex items-center justify-center p-4">
    <div class="bg-white rounded-lg shadow-2xl w-full max-w-2xl p-8">
        <!-- Progress Bar -->
        <div class="mb-8">
            <div class="flex justify-between mb-2">
                <span class="text-sm font-medium text-gray-700">Étape <span id="currentStep">1</span> sur 4</span>
                <span class="text-sm font-medium text-gray-700"><span id="progressPercent">0</span>%</span>
            </div>
            <div class="w-full bg-gray-200 rounded-full h-2">
                <div id="progressBar" class="bg-blue-600 h-2 rounded-full transition-all duration-300" style="width: 0%"></div>
            </div>
        </div>

        <!-- Form Steps -->
        <div id="formContainer">
            <!-- Step 1 -->
            <div id="step1" class="step-content">
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Informations Générales</h2>
                <div class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Nom Complet *</label>
                        <input type="text" id="name" name="fullname" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Votre nom complet" required>
                        <span class="text-red-500 text-sm hidden" id="nameError">Ce champ est requis</span>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Ville *</label>
                        <select id="city_id" name="ville_id" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" required>
                            <option value="">Sélectionnez une ville</option>
                            <option value="1">Casablanca</option>
                            <option value="2">Rabat</option>
                            <option value="3">Marrakech</option>
                            <option value="4">Fès</option>
                            <option value="5">Tanger</option>
                            <option value="6">Agadir</option>
                        </select>
                        <span class="text-red-500 text-sm hidden" id="cityError">Ce champ est requis</span>
                    </div>
                </div>
            </div>

            <!-- Step 2 -->
            <div id="step2" class="step-content hidden">
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Informations Professionnelles</h2>
                <div class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Type d'Actes *</label>
                        <input type="text" name="type_acte" id="type_actes" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Ex: Consultation juridique, Notariat..." required>
                        <span class="text-red-500 text-sm hidden" id="typeActesError">Ce champ est requis</span>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Années d'Expérience *</label>
                        <input type="number" name="annees_experience" id="annees_experience" min="0" max="50" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Nombre d'années" required>
                        <span class="text-red-500 text-sm hidden" id="experienceError">Ce champ est requis</span>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Tarif Horaire (DH) *</label>
                        <input type="number" name="tarif_horaire" id="tarif_horaire" min="0" step="0.01" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Ex: 500" required>
                        <span class="text-red-500 text-sm hidden" id="tarifError">Ce champ est requis</span>
                    </div>
                </div>
            </div>

            <!-- Step 3 -->
            <div id="step3" class="step-content hidden">
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Contact & Documents</h2>
                <div class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Adresse Email *</label>
                        <input type="email" name="email" id="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="votre@email.com" required>
                        <span class="text-red-500 text-sm hidden" id="emailError">Veuillez entrer un email valide</span>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Document PDF (CV ou Document)</label>
                        <input type="file" name="lienPdf" id="lienPdf" accept=".pdf" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                        <span class="text-red-500 text-sm hidden" id="pdfError">Veuillez sélectionner un fichier PDF</span>
                    </div>
                </div>
            </div>

            <!-- Step 4 - Confirmation -->
            <div id="step4" class="step-content hidden">
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Confirmation des Informations</h2>
                <div class="bg-gray-50 rounded-lg p-6 space-y-4">
                    <div class="border-b pb-3">
                        <h3 class="font-semibold text-gray-700 mb-2">Informations Générales</h3>
                        <p class="text-sm text-gray-600"><span class="font-medium">Nom:</span> <span id="confirmName"></span></p>
                        <p class="text-sm text-gray-600"><span class="font-medium">Ville:</span> <span id="confirmCity"></span></p>
                    </div>
                    <div class="border-b pb-3">
                        <h3 class="font-semibold text-gray-700 mb-2">Informations Professionnelles</h3>
                        <p class="text-sm text-gray-600"><span class="font-medium">Type d'Actes:</span> <span id="confirmTypeActes"></span></p>
                        <p class="text-sm text-gray-600"><span class="font-medium">Expérience:</span> <span id="confirmExperience"></span> ans</p>
                        <p class="text-sm text-gray-600"><span class="font-medium">Tarif Horaire:</span> <span id="confirmTarif"></span> DH</p>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-700 mb-2">Contact & Documents</h3>
                        <p class="text-sm text-gray-600"><span class="font-medium">Email:</span> <span id="confirmEmail"></span></p>
                        <p class="text-sm text-gray-600"><span class="font-medium">Lien PDF:</span> <span id="confirmPdf"></span></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navigation Buttons -->
        <div class="flex justify-between mt-8">
            <button id="prevBtn" class="px-6 py-2 bg-gray-300 text-gray-700 rounded-lg hover:bg-gray-400 transition-colors hidden">
                Précédent
            </button>
            <div class="flex-1"></div>
            <button id="nextBtn" class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                Suivant
            </button>
            <button id="submitBtn" class="px-6 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition-colors hidden">
                Soumettre
            </button>
        </div>
    </div>

    <script>
        let currentStep = 1;
        const totalSteps = 4;
        const formData = {};

        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');
        const submitBtn = document.getElementById('submitBtn');

        function updateProgress() {
            const progress = ((currentStep - 1) / (totalSteps - 1)) * 100;
            document.getElementById('progressBar').style.width = progress + '%';
            document.getElementById('progressPercent').textContent = Math.round(progress);
            document.getElementById('currentStep').textContent = currentStep;
        }

        function showStep(step) {
            document.querySelectorAll('.step-content').forEach(el => el.classList.add('hidden'));
            document.getElementById('step' + step).classList.remove('hidden');
            
            prevBtn.classList.toggle('hidden', step === 1);
            nextBtn.classList.toggle('hidden', step === totalSteps);
            submitBtn.classList.toggle('hidden', step !== totalSteps);
            
            updateProgress();
        }

        function validateStep(step) {
            let isValid = true;
            
            if (step === 1) {
                const name = document.getElementById('name').value.trim();
                const city = document.getElementById('city_id').value;
                
                if (!name) {
                    document.getElementById('nameError').classList.remove('hidden');
                    isValid = false;
                } else {
                    document.getElementById('nameError').classList.add('hidden');
                }
                
                if (!city) {
                    document.getElementById('cityError').classList.remove('hidden');
                    isValid = false;
                } else {
                    document.getElementById('cityError').classList.add('hidden');
                }
                
                if (isValid) {
                    formData.name = name;
                    formData.city_id = city;
                }
            }
            
            if (step === 2) {
                const typeActes = document.getElementById('type_actes').value.trim();
                const experience = document.getElementById('annees_experience').value;
                const tarif = document.getElementById('tarif_horaire').value;
                
                if (!typeActes) {
                    document.getElementById('typeActesError').classList.remove('hidden');
                    isValid = false;
                } else {
                    document.getElementById('typeActesError').classList.add('hidden');
                }
                
                if (!experience) {
                    document.getElementById('experienceError').classList.remove('hidden');
                    isValid = false;
                } else {
                    document.getElementById('experienceError').classList.add('hidden');
                }
                
                if (!tarif) {
                    document.getElementById('tarifError').classList.remove('hidden');
                    isValid = false;
                } else {
                    document.getElementById('tarifError').classList.add('hidden');
                }
                
                if (isValid) {
                    formData.type_actes = typeActes;
                    formData.annees_experience = experience;
                    formData.tarif_horaire = tarif;
                }
            }
            
            if (step === 3) {
                const email = document.getElementById('email').value.trim();
                const lienPdf = document.getElementById('lienPdf').value.trim();
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                
                if (!email || !emailRegex.test(email)) {
                    document.getElementById('emailError').classList.remove('hidden');
                    isValid = false;
                } else {
                    document.getElementById('emailError').classList.add('hidden');
                }
                
                if (lienPdf && !lienPdf.startsWith('http')) {
                    document.getElementById('pdfError').classList.remove('hidden');
                    isValid = false;
                } else {
                    document.getElementById('pdfError').classList.add('hidden');
                }
                
                if (isValid) {
                    formData.email = email;
                    formData.lienPdf = lienPdf || 'Non fourni';
                    populateConfirmation();
                }
            }
            
            return isValid;
        }

        function populateConfirmation() {
            const citySelect = document.getElementById('city_id');
            const cityText = citySelect.options[citySelect.selectedIndex].text;
            
            document.getElementById('confirmName').textContent = formData.name;
            document.getElementById('confirmCity').textContent = cityText;
            document.getElementById('confirmTypeActes').textContent = formData.type_actes;
            document.getElementById('confirmExperience').textContent = formData.annees_experience;
            document.getElementById('confirmTarif').textContent = formData.tarif_horaire;
            document.getElementById('confirmEmail').textContent = formData.email;
            document.getElementById('confirmPdf').textContent = formData.lienPdf;
        }

        nextBtn.addEventListener('click', () => {
            if (validateStep(currentStep)) {
                currentStep++;
                showStep(currentStep);
            }
        });

        prevBtn.addEventListener('click', () => {
            currentStep--;
            showStep(currentStep);
        });

        submitBtn.addEventListener('click', () => {
            console.log('Form Data:', formData);
            alert('Formulaire soumis avec succès!\n\nDonnées:\n' + JSON.stringify(formData, null, 2));
        });

        showStep(1);
    </script>
</body>
</html>