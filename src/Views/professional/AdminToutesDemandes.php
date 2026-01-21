<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Liste des Demandes</title>

  <!-- Tailwind CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="min-h-screen bg-gradient-to-br from-indigo-500 to-purple-600 p-6">
    <p class="text-gray-600 mt-5 ml-6 text-xl">Liste des Demandes</p>

<div class="max-w-6xl mx-auto mt-6 ml-6">

  <!-- Grid -->
  <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6 mb-10">

    <!-- CARDs -->
    <?php foreach ($professionels as $professionel): ?>
        <?php $color = $colors[array_rand($colors)] ?>
    <div class="bg-white rounded-2xl p-6 shadow-lg hover:-translate-y-1 hover:shadow-2xl transition relative overflow-hidden">
      <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-indigo-500 to-purple-600"></div>

      <!-- Header -->
      <div class="flex items-center mb-4">
        <div class="w-14 h-14 rounded-full <?= $color ?> flex items-center justify-center text-white font-bold text-lg mr-4">
            <?php
                if ($professionel['type'] == 'avocat'):
                    echo 'A' . strtoupper($professionel['name'][0]);
                else:
                    echo 'H' . strtoupper($professionel['name'][0]);
                endif;
            ?>
        </div>
        <div>
          <h3 class="text-lg font-bold text-gray-800"><?= $professionel['name'] ?></h3>
          <span class="text-xs font-semibold uppercase px-3 py-1 bg-gray-100 text-indigo-600 rounded-full">
            <?= $professionel['type'] ?>
          </span>
        </div>
      </div>

      <!-- Specialités -->
      <div class="bg-gray-100 border-l-4 border-indigo-500 rounded-xl p-4 mb-4">
        <p class="text-sm text-gray-600">
            <?php 
                  if ($professionel['type'] == 'avocat'):
                    echo $professionel['specialites'];
                  else:
                    echo $professionel['type_actes'];
                  endif;
            ?>
        </p>
      </div>

      <!-- Contact -->
      <div class="space-y-2 text-sm text-gray-500">
        <div class="flex items-center gap-2"><i class="fas fa-map-marker-alt text-indigo-500"></i><?= $professionel['city'] ?></div>
        <div class="flex items-center gap-2"><i class="fas fa-envelope text-indigo-500"></i><?= $professionel['email'] ?></div>
      </div>

      <!-- Actions -->
      <div class="flex gap-3 mt-6">
        <button class="flex-1 bg-gradient-to-r from-green-400 to-emerald-400 text-white py-2 rounded-xl font-semibold hover:scale-105 hover:shadow-lg transition">
          <i class="fas fa-check mr-1"></i> Accepter
        </button>
        <button class="flex-1 bg-gradient-to-r from-pink-400 to-yellow-400 text-white py-2 rounded-xl font-semibold hover:scale-105 hover:shadow-lg transition">
          <i class="fas fa-times mr-1"></i> Refuser
        </button>
      </div>
    </div>
<?php endforeach; ?>
  </div>
</div>

</body>
</html>
