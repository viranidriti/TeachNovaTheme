<?php
    if (isset($session) && !empty($session->get('absoluteURL'))) {
        $URL = $session->get('absoluteURL')."/";
        $URL=htmlspecialchars($URL); // Ensure URL is safe for output
    } else {
        $URL= '/'; // Default URL if not set
    
    }
?>

<!-- Lucide Icons -->
<script src="https://unpkg.com/lucide@latest"></script>

 <!-- Header -->
    <header class="fixed top-0 left-0 right-0 z-40 bg-gray-50/80 backdrop-blur-lg border-b border-gray-200">
        <div class="container mx-auto px-6 py-4">
            <nav class="flex items-center justify-between">
                <!-- Logo -->

                <a href="<?php echo $URL; ?>/main.php" class="flex items-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-blue-600"><path d="M12 2L2 7l10 5 10-5-10-5z"></path><path d="M2 17l10 5 10-5"></path><path d="M2 12l10 5 10-5"></path></svg>
                    <span class="text-2xl font-bold text-gray-900">TeachNova</span>
                </a>
                
                <!-- CTA / Login -->
                <div class="flex items-center space-x-4">
                    <?php 
                        if (isset($session) && $session->has('username'))
                        {
                            echo '<b>Welcome, ' . htmlspecialchars($session->get('username'))."&nbsp;&nbsp</b>";
                        }
                        else
                        {
                        ?>
                        <a href="<?php echo $URL; ?>index.php" class="hidden sm:inline-block text-gray-600 hover:text-gray-900 transition-colors font-medium">
                        Login
                    </a>
                        <?php 
                     } 
                    ?>

                   <a href="<?php echo $URL; ?>news/index.php" class="hidden sm:inline-block text-gray-600 hover:text-gray-900 transition-colors font-medium">
                        News
                    </a>
                    <a href="<?php echo $URL; ?>about.php" class="hidden sm:inline-block text-gray-600 hover:text-gray-900 transition-colors font-medium">
                        About Us
                    </a>
                </div>
            </nav>
        </div>
    </header>
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