<?php include("connectDB.php")?>
<?php include("adminHeader.php")?>
            <div class="info-cards">
                <?php include("countUser.php")?>
                <div class="card">
                    <h3>Users</h3>
                    <p>Total: <?= $total_users ?></p>
                </div>
                <div class="card">
                    <h3>Tour Guides</h3>
                    <p>Total: 20</p>
                    <p>New: 2</p>
                </div>
                <div class="card">
                    <h3>Tourist Attractions</h3>
                    <p>Total: 50</p>
                    <p>New: 3</p>
                </div>
                <div class="card">
                    <h3>Messages</h3>
                    <p>New: 10</p>
                </div>
            </div>
        <?php include("adminFooter.php") ?>
    </div>
</body>
</html>
