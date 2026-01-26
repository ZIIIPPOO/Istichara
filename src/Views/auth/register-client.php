<!DOCTYPE html>
<html lang="fr" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription Client - ISTICHARA</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body class="h-full bg-gradient-to-br from-blue-900 via-blue-800 to-blue-900">
    <div class="min-h-full flex">
        <!-- Left Side - Branding -->
        <div class="hidden lg:flex lg:w-1/2 flex-col justify-center items-center p-12 relative overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-br from-blue-900/90 to-blue-950/90"></div>
            <div class="absolute top-20 left-20 w-72 h-72 bg-amber-500/20 rounded-full blur-3xl"></div>
            <div class="absolute bottom-20 right-20 w-96 h-96 bg-blue-400/20 rounded-full blur-3xl"></div>
            
            <div class="relative z-10 text-center">
                <div class="flex items-center justify-center mb-8">
                    <i class="fas fa-balance-scale text-amber-500 text-5xl mr-4"></i>
                    <span class="text-white text-4xl font-bold">ISTICHARA</span>
                </div>
                
                <h1 class="text-3xl font-bold text-white mb-6">Rejoignez-nous</h1>
                
                <div class="bg-white/10 backdrop-blur-lg rounded-2xl p-8 max-w-sm">
                    <h3 class="text-xl font-semibold text-white mb-4">Avantages Client</h3>
                    <ul class="space-y-3 text-left">
                        <li class="flex items-center text-blue-100">
                            <i class="fas fa-check-circle text-amber-500 mr-3"></i>
                            Accès à tous les professionnels
                        </li>
                        <li class="flex items-center text-blue-100">
                            <i class="fas fa-check-circle text-amber-500 mr-3"></i>
                            Prise de rendez-vous en ligne
                        </li>
                        <li class="flex items-center text-blue-100">
                            <i class="fas fa-check-circle text-amber-500 mr-3"></i>
                            Consultations en visioconférence
                        </li>
                        <li class="flex items-center text-blue-100">
                            <i class="fas fa-check-circle text-amber-500 mr-3"></i>
                            Historique des consultations
                        </li>
                        <li class="flex items-center text-blue-100">
                            <i class="fas fa-check-circle text-amber-500 mr-3"></i>
                            Service 100% gratuit
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Right Side - Registration Form -->
        <div class="w-full lg:w-1/2 flex flex-col justify-center items-center p-8 bg-gray-50">
            <div class="w-full max-w-md">
                <!-- Mobile Logo -->
                <div class="lg:hidden flex items-center justify-center mb-8">
                    <i class="fas fa-balance-scale text-amber-600 text-3xl mr-3"></i>
                    <span class="text-blue-900 text-2xl font-bold">ISTICHARA</span>
                </div>

                <div class="bg-white rounded-2xl shadow-xl p-8">
                    <div class="text-center mb-8">
                        <div class="inline-flex items-center justify-center w-16 h-16 bg-blue-100 rounded-full mb-4">
                            <i class="fas fa-user-plus text-blue-900 text-2xl"></i>
                        </div>
                        <h2 class="text-3xl font-bold text-gray-900">Inscription Client</h2>
                        <p class="text-gray-600 mt-2">Créez votre compte en quelques secondes</p>
                    </div>

                    <form action="/User/signup" method="POST" class="space-y-5">
                        <!-- Nom & Prénom -->
                        <div class="grid grid-cols-1 gap-4">
                            <div>
                                <label for="nom" class="block text-sm font-medium text-gray-700 mb-2">
                                    Nom Complet<span class="text-red-500">*</span>
                                </label>
                                <input type="text" id="nom" name="fullname" required
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-900 focus:border-transparent"
                                    placeholder="Alami">
                            </div>
                        </div>

                        <!-- Email -->
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                                Adresse Email <span class="text-red-500">*</span>
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-envelope text-gray-400"></i>
                                </div>
                                <input type="email" id="email" name="email" required
                                    class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-900 focus:border-transparent"
                                    placeholder="votre@email.com">
                            </div>
                        </div>

                        <!-- Téléphone -->
                        <div>
                            <label for="telephone" class="block text-sm font-medium text-gray-700 mb-2">
                                Téléphone
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-phone text-gray-400"></i>
                                </div>
                                <input type="tel" id="telephone" name="telephone"
                                    class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-900 focus:border-transparent"
                                    placeholder="06 12 34 56 78">
                            </div>
                        </div>

                        <!-- Role -->
                        <div>
                            <label for="Role" class="block text-sm font-medium text-gray-700 mb-2">
                                Role
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fa-solid fa-circle-user-circle-user"></i>
                                </div>
                                <input type="radio" name="role" value="client" />Utilisateur</input>
                                <input type="radio" name="role" value="admin">admin</input>
                            </div>
                        </div>

                        <!-- Password -->
                        <div>
                            <label for="password" class="block text-sm font-medium text-gray-700 mb-2">
                                Mot de passe <span class="text-red-500">*</span>
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-lock text-gray-400"></i>
                                </div>
                                <input type="password" id="password" name="password" required minlength="8"
                                    class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-900 focus:border-transparent"
                                    placeholder="Minimum 8 caractères">
                            </div>
                        </div>

                        <!-- Confirm Password -->
                        <div>
                            <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-2">
                                Confirmer le mot de passe <span class="text-red-500">*</span>
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-lock text-gray-400"></i>
                                </div>
                                <input type="password" id="password_confirmation" name="password_confirmation" required
                                    class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-900 focus:border-transparent"
                                    placeholder="Confirmez votre mot de passe">
                            </div>
                        </div>

                        <!-- Terms -->
                        <div class="flex items-start">
                            <input type="checkbox" id="terms" name="terms" required
                                class="w-4 h-4 mt-1 text-blue-900 border-gray-300 rounded focus:ring-blue-900">
                            <label for="terms" class="ml-2 text-sm text-gray-600">
                                J'accepte les <a href="/terms" class="text-blue-900 hover:underline">conditions d'utilisation</a> 
                                et la <a href="/privacy" class="text-blue-900 hover:underline">politique de confidentialité</a>
                            </label>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="w-full bg-blue-900 text-white py-3 px-4 rounded-lg font-semibold hover:bg-blue-800 focus:ring-4 focus:ring-blue-900/50 transition transform hover:-translate-y-0.5">
                            <i class="fas fa-user-plus mr-2"></i>
                            Créer mon compte
                        </button>
                    </form>

                    <!-- Login Link -->
                    <p class="text-center text-gray-600 mt-6">
                        Déjà inscrit ? 
                        <a href="showconn" class="text-blue-900 font-semibold hover:underline">Se connecter</a>
                    </p>
                </div>

                <!-- Pro Link -->
                <div class="text-center mt-6">
                    <p class="text-gray-500 text-sm">
                        Vous êtes un professionnel ?
                        <a href="showformpro" class="text-amber-600 font-semibold hover:underline">
                            Inscrivez-vous ici
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>