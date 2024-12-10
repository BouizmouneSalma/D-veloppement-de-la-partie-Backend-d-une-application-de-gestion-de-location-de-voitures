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