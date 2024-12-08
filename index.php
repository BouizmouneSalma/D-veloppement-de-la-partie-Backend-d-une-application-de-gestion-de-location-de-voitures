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
    </div>

</body>
</html>
