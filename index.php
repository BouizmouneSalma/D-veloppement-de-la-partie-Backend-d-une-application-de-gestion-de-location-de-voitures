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
            <!-- table de voitures -->
            <div id="voitures" role="tabpanel" class="bg-white p-4 rounded-lg shadow">
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
        </div>
    </div>

</body>
</html>
