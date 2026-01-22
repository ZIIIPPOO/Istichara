<!DOCTYPE html>
<html lang="fr" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - ISTICHARA</title>
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
                    <i class="fas fa-balance-scale text-amber-500 text-6xl mr-4"></i>
                    <span class="text-white text-5xl font-bold">ISTICHARA</span>
                </div>
                <h1 class="text-4xl font-bold text-white mb-4">Plateforme Juridique Marocaine</h1>
                <p class="text-blue-200 text-lg max-w-md">
                    Connectez-vous avec les meilleurs avocats et huissiers de justice du Maroc
                </p>
                
                <div class="mt-12 grid grid-cols-3 gap-8 text-center">
                    <div>
                        <div class="text-4xl font-bold text-amber-500">500+</div>
                        <div class="text-blue-200 text-sm">Professionnels</div>
                    </div>
                    <div>
                        <div class="text-4xl font-bold text-amber-500">12</div>
                        <div class="text-blue-200 text-sm">Villes</div>
                    </div>
                    <div>
                        <div class="text-4xl font-bold text-amber-500">10k+</div>
                        <div class="text-blue-200 text-sm">Consultations</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Side - Login Form -->
        <div class="w-full lg:w-1/2 flex flex-col justify-center items-center p-8 bg-gray-50">
            <div class="w-full max-w-md">
                <!-- Mobile Logo -->
                <div class="lg:hidden flex items-center justify-center mb-8">
                    <i class="fas fa-balance-scale text-amber-600 text-3xl mr-3"></i>
                    <span class="text-blue-900 text-2xl font-bold">ISTICHARA</span>
                </div>

                <div class="bg-white rounded-2xl shadow-xl p-8">
                    <div class="text-center mb-8">
                        <h2 class="text-3xl font-bold text-gray-900">Connexion</h2>
                        <p class="text-gray-600 mt-2">Accédez à votre espace personnel</p>
                    </div>

                    <form action="User/signin" method="POST" class="space-y-6">
                        <!-- Email -->
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                                Adresse Email
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-envelope text-gray-400"></i>
                                </div>
                                <input type="email" id="email" name="email" required
                                    class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-900 focus:border-transparent transition"
                                    placeholder="votre@email.com">
                            </div>
                        </div>

                        <!-- Password -->
                        <div>
                            <label for="password" class="block text-sm font-medium text-gray-700 mb-2">
                                Mot de passe
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-lock text-gray-400"></i>
                                </div>
                                <input type="password" id="password" name="password" required
                                    class="w-full pl-10 pr-12 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-900 focus:border-transparent transition"
                                    placeholder="••••••••">
                                <button type="button" onclick="togglePassword()" class="absolute inset-y-0 right-0 pr-3 flex items-center">
                                    <i class="fas fa-eye text-gray-400 hover:text-gray-600" id="toggleIcon"></i>
                                </button>
                            </div>
                        </div>

                        <!-- Remember & Forgot -->
                        <div class="flex items-center justify-between">
                            <label class="flex items-center">
                                <input type="checkbox" name="remember" class="w-4 h-4 text-blue-900 border-gray-300 rounded focus:ring-blue-900">
                                <span class="ml-2 text-sm text-gray-600">Se souvenir de moi</span>
                            </label>
                            <a href="/forgot-password" class="text-sm text-blue-900 hover:text-blue-700 font-medium">
                                Mot de passe oublié ?
                            </a>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="w-full bg-blue-900 text-white py-3 px-4 rounded-lg font-semibold hover:bg-blue-800 focus:ring-4 focus:ring-blue-900/50 transition transform hover:-translate-y-0.5">
                            <i class="fas fa-sign-in-alt mr-2"></i>
                            Se connecter
                        </button>
                    </form>

                    <!-- Divider -->
                    <div class="relative my-8">
                        <div class="absolute inset-0 flex items-center">
                            <div class="w-full border-t border-gray-200"></div>
                        </div>
                        <div class="relative flex justify-center text-sm">
                            <span class="px-4 bg-white text-gray-500">Ou</span>
                        </div>
                    </div>

                    <!-- Register Links -->
                    <div class="space-y-3">
                        <a href="/register/client" class="w-full flex items-center justify-center px-4 py-3 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 transition">
                            <i class="fas fa-user mr-2 text-blue-900"></i>
                            Créer un compte Client
                        </a>
                        <a href="/register/professional" class="w-full flex items-center justify-center px-4 py-3 border border-amber-500 rounded-lg text-amber-700 hover:bg-amber-50 transition">
                            <i class="fas fa-briefcase mr-2"></i>
                            S'inscrire comme Professionnel
                        </a>
                    </div>
                </div>

                <!-- Footer -->
                <p class="text-center text-gray-500 text-sm mt-8">
                    © 2025 ISTICHARA - Tous droits réservés
                </p>
            </div>
        </div>
    </div>
</body>
</html>