<?php
include 'db.php';

$query1 = $conn->query("SELECT * FROM client");
$clients = $query1->fetch_all(MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Location de voitures</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 py-8">
    <div class="container mx-auto">
        <h1 class="text-3xl font-bold text-center">Gestion Location de Voitures</h1>
        <ul class="flex border-b mb-4" id="myTab" role="tablist">
            <li class="mr-1">
                <button class="bg-gray-200 hover:bg-gray-300 text-gray-700 font-semibold py-2 px-4 rounded-t active" id="clients-tab" data-target="#clients" type="button" role="tab">Clients</button>
            </li>
            <li class="mr-1">
                <button class="bg-gray-200 hover:bg-gray-300 text-gray-700 font-semibold py-2 px-4 rounded-t" id="voitures-tab" data-target="#voitures" type="button" role="tab">Voitures</button>
            </li>
            <li>
                <button class="bg-gray-200 hover:bg-gray-300 text-gray-700 font-semibold py-2 px-4 rounded-t" id="contrats-tab" data-target="#contrats" type="button" role="tab">Contrats</button>
            </li>
        </ul>
        <div class="tab-content">
            <!-- table de clients -->
            <div id="clients" role="tabpanel" class="bg-white p-4 rounded-lg shadow">
            <button class="bg-blue-500 text-white py-2 px-4 rounded mb-4">Ajouter un Client</button> 
                <table class="table-auto w-full">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="px-4 py-2">ID</th>
                            <th class="px-4 py-2">Nom</th>
                            <th class="px-4 py-2">Adresse</th>
                            <th class="px-4 py-2">Téléphone</th>
                            <th class="px-4 py-2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php if (!empty($clients)) : ?>
                    <?php foreach ($clients as $client) : ?>
                        <tr class="border-b text-center">
                            <td class="px-4 py-2"><?php echo $client['numC']?></td>
                            <td class="px-4 py-2"><?php echo $client['nom']?></td>
                            <td class="px-4 py-2"><?php echo $client['adresse']?></td>
                            <td class="px-4 py-2"><?php echo $client['tel']?></td>
                            <td class="px-4 py-2 flex justify-evenly">
                                <button class="bg-yellow-500 text-white py-1 px-3 rounded">Modifier</button>
                                <button class="bg-red-500 text-white py-1 px-2 rounded">Supprimer</button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="6" class="text-center px-4 py-2">Aucune client trouvée.</td>
                    </tr>
                <?php endif; ?>
                    </tbody>
                </table>
            </div> 
            <!-- table de voitures -->
            <div id="voitures" role="tabpanel" class="hidden bg-white p-4 rounded-lg shadow">
            <button class="bg-blue-500 text-white py-2 px-4 rounded mb-4" >Ajouter une Voiture</button>
                <table class="table-auto w-full">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="px-4 py-2">ID</th>
                            <th class="px-4 py-2">Marque</th>
                            <th class="px-4 py-2">Modele</th>
                            <th class="px-4 py-2">Annee</th>
                            <th class="px-4 py-2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b text-center">
                            <td class="px-4 py-2"></td>
                            <td class="px-4 py-2"></td>
                            <td class="px-4 py-2"></td>
                            <td class="px-4 py-2"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- Contrats Table -->
            <div id="contrats" role="tabpanel" class="hidden bg-white p-4 rounded-lg shadow">
            <button class="bg-blue-500 text-white py-2 px-4 rounded mb-4">Ajouter un Contrat</button>
                <table class="table-auto w-full">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="px-4 py-2">Client</th>
                            <th class="px-4 py-2">Voiture</th>
                            <th class="px-4 py-2">Date de début</th>
                            <th class="px-4 py-2">Date de fin</th>
                            <th class="px-4 py-2">Duree</th>
                            <th class="px-4 py-2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b text-center">
                            <td class="px-4 py-2"></td>
                            <td class="px-4 py-2"></td>
                            <td class="px-4 py-2"></td>
                            <td class="px-4 py-2"></td>
                            <td class="px-4 py-2"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
    </div>
    <script src="js/main.js"></script>
</body>
</html>
