 <!-- Header -->
    <header class="fixed top-0 left-0 right-0 z-40 bg-gray-50/80 backdrop-blur-lg border-b border-gray-200">
        <div class="container mx-auto px-6 py-4">
            <nav class="flex items-center justify-between">
                <!-- Logo -->

                <a href="/TeachNova/main.php" class="flex items-center space-x-2">
                    <?php if (!empty($organisationLogo)): ?>
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-blue-600"><path d="M12 2L2 7l10 5 10-5-10-5z"></path><path d="M2 17l10 5 10-5"></path><path d="M2 12l10 5 10-5"></path></svg>
                        <span class="text-2xl font-bold text-gray-900"><?php echo htmlspecialchars($organisationName); ?></span>
                    <?php else: ?>
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-blue-600"><path d="M12 2L2 7l10 5 10-5-10-5z"></path><path d="M2 17l10 5 10-5"></path><path d="M2 12l10 5 10-5"></path></svg>
                        <span class="text-2xl font-bold text-gray-900">TeachNova</span>
                    <?php endif; ?>
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
                        <button id="login-btn" class="text-gray-600 hover:text-gray-900 transition-colors font-medium">Login</button>
                        <?php 
                    } 
                    ?>

                    <a href="/TeachNova/index.php" class="hidden sm:inline-block bg-blue-600 text-white font-semibold px-5 py-2.5 rounded-lg hover:bg-blue-700 transition-colors">
                        Get Started
                    </a>
                </div>
            </nav>
        </div>
    </header>
