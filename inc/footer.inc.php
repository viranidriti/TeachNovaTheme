<?php
    if (!empty($session->get('absoluteURL'))) {
        $URL = $session->get('absoluteURL')."/";
        $URL=htmlspecialchars($URL); // Ensure URL is safe for output
    } else {
        $URL= '/'; // Default URL if not set
    
    }
?>

   <!-- Footer -->
    <footer class="bg-white border-t border-gray-200">
        <div class="container mx-auto max-w-7xl px-6 py-12">
            <div class="flex flex-col md:flex-row items-center justify-between gap-8">
                <div class="flex-shrink-0">
                    <a href="<?php echo $URL; ?>" class="flex items-center space-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-blue-600"><path d="M12 2L2 7l10 5 10-5-10-5z"></path><path d="M2 17l10 5 10-5"></path><path d="M2 12l10 5 10-5"></path></svg>
                        <span class="text-2xl font-bold text-gray-900">TeachNova</span>
                    </a>
                </div>
                <nav class="flex flex-wrap justify-center gap-x-6 gap-y-2" aria-label="Footer">
                    <a href="<?php echo $URL; ?>index.php" class="text-base text-blue-900 hover:text-blue-500 transition-colors">Login</a>
                    <a href="<?php echo $URL; ?>contact.php" class="text-base text-blue-900 hover:text-blue-500 transition-colors">Contact Us</a>
                    <a href="<?php echo $URL; ?>about.php" class="text-base text-blue-900 hover:text-blue-500 transition-colors">About Us</a>
                </nav>
            </div>
            <div class="mt-12 pt-8 border-t border-gray-200 flex flex-col sm:flex-row-reverse items-center justify-between gap-y-4">
                <div class="flex space-x-6">
                    <a href="https://www.linkedin.com/in/driti-virani-7a6048315/" class="text-blue-500 hover:text-blue-900 transition-colors" target="_blank">
                         <span class="sr-only">LinkedIn</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" clip-rule="evenodd"/></svg>
                    </a>
                </div>
                <p class="text-sm text-gray-500">&copy; <span id="current-year">2025</span> TeachNova, Inc. All rights reserved.</p>
            </div>
        </div>

    </footer>
    <script>
        // Lucide Icons replacement
        lucide.createIcons();

        // Profile Dropdown Logic
        const profileButton = document.getElementById('profile-button');
        const profileDropdown = document.getElementById('profile-dropdown');

        if (profileButton && profileDropdown) {
            profileButton.addEventListener('click', (event) => {
                event.stopPropagation();
                profileDropdown.classList.toggle('hidden');
            });
        }

        document.addEventListener('click', () => {
            if (profileDropdown && !profileDropdown.classList.contains('hidden')) {
                profileDropdown.classList.add('hidden');
            }
        });
    </script>