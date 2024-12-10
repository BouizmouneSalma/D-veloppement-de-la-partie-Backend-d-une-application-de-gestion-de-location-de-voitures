<?php
include 'db.php';

$query1 = $conn->query("SELECT * FROM client");
$clients = $query1->fetch_all(MYSQLI_ASSOC);

$query2 = $conn->query("SELECT * FROM voitures");
$voitures = $query2->fetch_all(MYSQLI_ASSOC);

$query3 = $conn->query("SELECT client.nom,Contrat.numV,voitures.marque,Contrat.datedebut,Contrat.datefin,Contrat.duree,client.tel,client.adresse FROM Contrat JOIN client ON  Contrat.numC = client.numC JOIN  voitures ON Contrat.numV = Voitures.numV;");
$contrats=$query3->fetch_all(MYSQLI_ASSOC);
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
                            <td class="px-1 py-2 flex justify-evenly">
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
                    <?php if (!empty($voitures)) : ?>
                    <?php foreach ($voitures as $voiture) : ?>
                        <tr class="border-b text-center">
                            <td class="px-4 py-2"><?php echo $voiture['numV']?></td>
                            <td class="px-4 py-2"><?php echo $voiture['marque']?></td>
                            <td class="px-4 py-2"><?php echo $voiture['modele']?></td>
                            <td class="px-4 py-2"><?php echo $voiture['annee']?></td>
                            <td class="px-1 py-2 flex justify-evenly">
                                <button class="bg-yellow-500 text-white py-1 px-3 rounded">Modifier</button>
                                <button class="bg-red-500 text-white py-1 px-2 rounded">Supprimer</button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="6" class="text-center px-4 py-2">Aucune Voiture trouvée.</td>
                    </tr>
                <?php endif; ?>
                </table>
            </div>
            <!-- Contrats Table -->
            <div id="contrats" role="tabpanel" class="hidden bg-white p-4 rounded-lg shadow">
            <button class="bg-blue-500 text-white py-2 px-4 rounded mb-4">Ajouter un Contrat</button>
                <table class="table-auto w-full">
                    <thead>
                        <tr class="bg-gray-200">
                        <th class="px-4 py-2">Client</th>
                            <th class="px-4 py-2">Voiture ID</th>
                            <th class="px-4 py-2">Date de début</th>
                            <th class="px-4 py-2">Date de fin</th>
                            <th class="px-4 py-2">Duree</th>
                            <th class="px-4 py-2">Téléphone</th>
                            <th class="px-4 py-2">Adresse</th>
                            <th class="px-4 py-2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php if (!empty($contrats)) : ?>
                    <?php foreach ($contrats as $contrat) : ?>
                        <tr class="border-b text-center">
                            <td class="px-4 py-2"><?php echo $contrat['nom']?></td>
                            <td class="px-4 py-2"><?php echo $contrat['numV']?></td>
                            <td class="px-4 py-2"><?php echo $contrat['datedebut']?></td>
                            <td class="px-4 py-2"><?php echo $contrat['datefin']?></td>
                            <td class="px-4 py-2"><?php echo $contrat['duree']?></td>
                            <td class="px-4 py-2"><?php echo $contrat['tel']?></td>
                            <td class="px-4 py-2"><?php echo $contrat['adresse']?></td>
                            <td class="px-1 py-2 flex justify-evenly ">
                                <button class="bg-yellow-500 text-white py-1 px-3 rounded">Modifier</button>
                                <button class="bg-red-500 text-white py-1 px-2 rounded">Supprimer</button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="6" class="text-center px-4 py-2">Aucune contrat trouvée.</td>
                    </tr>
                <?php endif; ?>
                    </tbody>
                </table>
            </div>
    </div>
<div id="addClientForm" class=" hidden bg-white p-4 rounded-lg shadow">
    <h2 class="text-xl font-bold mb-4">Ajouter un Client</h2>
    <form action="insert.php" method="POST">
        <label class="block mb-2">Nom:</label>
        <input type="text" name="nom" class="w-full px-3 py-2 border rounded mb-4" required>
        
        <label class="block mb-2">Adresse:</label>
        <input type="text" name="adresse" class="w-full px-3 py-2 border rounded mb-4" required>
        
        <label class="block mb-2">Téléphone:</label>
        <input type="text" name="tel" class="w-full px-3 py-2 border rounded mb-4" required>
        
        <button type="submit" class="bg-gray-500 text-white py-2 px-4 rounded">Ajouter</button>
    </form>
</div>

    <script src="js/main.js"></script>
</body>
</html>
