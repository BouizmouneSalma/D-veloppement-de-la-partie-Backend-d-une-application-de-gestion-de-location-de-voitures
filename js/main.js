const tabs = document.querySelectorAll('[role="tab"]');
        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                document.querySelectorAll('[role="tabpanel"]').forEach(panel => panel.classList.add('hidden'));

                document.querySelector(tab.getAttribute('data-target')).classList.remove('hidden');

                tabs.forEach(t => t.classList.remove('active'));
                tab.classList.add('active');
            });
        });
        document.getElementById('cl').addEventListener('click', function() {
            document.getElementById('addClientForm').classList.toggle('hidden');
        });
        document.getElementById('vr').addEventListener('click', function() {
            document.getElementById('addVoitureForm').classList.toggle('hidden');
        });

        document.getElementById('ct').addEventListener('click', function() {
            document.getElementById('addContratForm').classList.toggle('hidden');
        });
        function deleteClient(id) {
            if (confirm("Êtes-vous sûr de vouloir supprimer ce client ?")) {
                window.location.href = "deleteClient.php?id=" + id;
            }
        }
        function deleteVoiture(id) {
            if (confirm("Êtes-vous sûr de vouloir supprimer ce Voiture ?")) {
                window.location.href = "deleteVoiture.php?id=" + id;
            }
        }
        function deleteContrat(id) {
            if (confirm("Êtes-vous sûr de vouloir supprimer ce Contrat ?")) {
                window.location.href = "deleteContrat.php?id=" + id;
            }
        }

        function editClient(id, nom, adresse, tel) {
    document.getElementById('editClientForm').classList.remove('hidden');
}

function toggleEditClientForm() {
    document.getElementById('editClientForm').classList.add('hidden');
}
function editVoiturdForm() {
    document.getElementById('editVoitureForm').classList.remove('hidden');
}
function toggleEditVoiturdForm() {
    document.getElementById('editVoitureForm').classList.add('hidden');
}

