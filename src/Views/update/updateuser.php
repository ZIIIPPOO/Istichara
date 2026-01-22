<div class="py-6 px-4 sm:px-6 lg:px-8">
    <div class="max-w-3xl mx-auto">

        <!-- Header -->
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-900">Modifier l’Utilisateur</h1>
            <p class="mt-2 text-sm text-gray-600">
                Mettre à jour les informations de l’utilisateur
            </p>
        </div>

        <!-- Form Card -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <form action="/store/update" method="POST">
                <div class="p-8 space-y-6">

                    <!-- Hidden ID -->
                    <input type="hidden" name="id" value="<?= htmlspecialchars($user->getId()) ?>">

                    <!-- Informations Générales -->
                    <div class="border-b border-gray-200 pb-6">
                        <h2 class="text-xl font-semibold text-gray-900 mb-4 flex items-center">
                            <i class="fas fa-user-circle text-amber-600 mr-2"></i>
                            Informations Générales
                        </h2>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                            <!-- Nom -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    Full Name
                                </label>
                                <input type="text" name="nom"
                                    value="<?= htmlspecialchars($user->getFullName()) ?>"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-900">
                            </div>

                         
                            <!-- Email -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    Email
                                </label>
                                <input type="email" name="email"
                                    value="<?= htmlspecialchars($user->getEmail()) ?>"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-900">
                            </div>

                            <!-- Téléphone -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    Téléphone
                                </label>
                                <input type="text" name="telephone"
                                    value="<?= htmlspecialchars(is_null($user->getTelephone()) ? "" : is_null($user->getTelephone())) ?>"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-900">
                            </div>

                        </div>
                    </div>

                    <!-- Sécurité & Rôle -->
                    <div class="border-b border-gray-200 pb-6">
                        <h2 class="text-xl font-semibold text-gray-900 mb-4 flex items-center">
                            <i class="fas fa-shield-alt text-amber-600 mr-2"></i>
                            Sécurité & Rôle
                        </h2>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                            <!-- Password -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    Nouveau mot de passe
                                </label>

                                <div class="relative">
                                    <input type="password"
                                        name="password"
                                        id="password"
                                        placeholder="Entrer un nouveau mot de passe"
                                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-900 pr-10">

                                    <button type="button"
                                        onclick="togglePassword('password', this)"
                                        class="absolute inset-y-0 right-3 flex items-center text-gray-500">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                            </div>

                            <!-- Confirm Password -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    Confirmer le mot de passe
                                </label>

                                <div class="relative">
                                    <input type="password"
                                        id="repassword"
                                        placeholder="Confirmer le mot de passe"
                                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-900 pr-10">

                                    <button type="button"
                                        onclick="togglePassword('repassword', this)"
                                        class="absolute inset-y-0 right-3 flex items-center text-gray-500">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>

                                <!-- Validation message -->
                                <p id="passwordError" class="mt-2 text-sm text-red-600 hidden">
                                    Les mots de passe ne correspondent pas
                                </p>
                            </div>


                            <!-- Role -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    Rôle
                                </label>
                                <select name="role" disabled
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-900">
                                    <option value="ADMIN" <?= $user->getRole() === 'admin' ? 'selected' : '' ?>>Admin</option>
                                    <option value="USER" <?= $user->getRole() === 'user' ? 'selected' : '' ?>>User</option>
                                </select>
                            </div>

                        </div>
                    </div>

                    <!-- Status -->
                    <div class="border-b border-gray-200 pb-6">
                        <h2 class="text-xl font-semibold text-gray-900 mb-4 flex items-center">
                            <i class="fas fa-toggle-on text-amber-600 mr-2"></i>
                            Statut du Compte
                        </h2>

                        <div class="flex items-center space-x-6">
                            <label class="flex items-center space-x-2 cursor-pointer">
                                <input type="radio" name="status" value="suspended"
                                    <?= $user->getStatus() === 'suspended' ? 'checked' : '' ?>
                                    class="w-4 h-4 text-blue-900 focus:ring-blue-900">
                                <span class="text-sm text-gray-700">suspended</span>
                            </label>

                            <label class="flex items-center space-x-2 cursor-pointer">
                                <input type="radio" name="status" value="active"
                                    <?= $user->getStatus() === 'active' ? 'checked' : '' ?>
                                    class="w-4 h-4 text-blue-900 focus:ring-blue-900">
                                <span class="text-sm text-gray-700">active</span>
                            </label>
                            <label class="flex items-center space-x-2 cursor-pointer">
                                <input type="radio" name="status" value="pending"
                                    <?= $user->getStatus() === 'pending' ? 'checked' : '' ?>
                                    class="w-4 h-4 text-blue-900 focus:ring-blue-900">
                                <span class="text-sm text-gray-700">pending</span>
                            </label>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex items-center justify-end space-x-4 pt-6">
                        <a href="/users" class="btn-action btn-secondary">
                            <i class="fas fa-times"></i>
                            Annuler
                        </a>

                        <button type="submit" class="btn-action btn-primary">
                            <i class="fas fa-save"></i>
                            Mettre à jour
                        </button>
                    </div>

                </div>
            </form>
        </div>
    </div>
    <script>
        function togglePassword(inputId, btn) {
            const input = document.getElementById(inputId);
            const icon = btn.querySelector('i');

            if (input.type === "password") {
                input.type = "text";
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                input.type = "password";
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        }
        const password = document.getElementById('password');
        const repassword = document.getElementById('repassword');
        const errorMsg = document.getElementById('passwordError');
        const form = document.querySelector('form');

        function validatePasswords() {
            
            if (password.value === '' && repassword.value === '') {
                errorMsg.classList.add('hidden');
                return true;
            }

            if (password.value !== repassword.value) {
                errorMsg.classList.remove('hidden');
                return false;
            }

            errorMsg.classList.add('hidden');
            return true;
        }

        // Live validation
        password.addEventListener('input', validatePasswords);
        repassword.addEventListener('input', validatePasswords);

        // On submit
        form.addEventListener('submit', function(e) {
            if (!validatePasswords()) {
                e.preventDefault();
            }
        });
    </script>

</div>