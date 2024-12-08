const tabs = document.querySelectorAll('[role="tab"]');
        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                document.querySelectorAll('[role="tabpanel"]').forEach(panel => panel.classList.add('hidden'));

                document.querySelector(tab.getAttribute('data-target')).classList.remove('hidden');

                tabs.forEach(t => t.classList.remove('active'));
                tab.classList.add('active');
            });
        });