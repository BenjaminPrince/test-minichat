<?php include './partials/header.php' ?>



<body>
    <main class=container>
        <!-- affiche les messages (automatisé toute les 500millisecond)-->
        <br>
        <div class="bg-success p-2 text-dark bg-opacity-10">
            <section id="messages"></section>
            <script>
                setInterval('load_messages()', 500);

                function load_messages() {
                    $('#messages').load('load_messages.php');
                }
            </script>
        </div>



        
        <br>

        <!-- ecrire son pseudo est son message -->
        <section>
            <form method="POST" action="./process/process_message.php">

                <div class="form-floating ">
                    <input type="text" name="pseudo"   class="form-control " placeholder="Pseudo">
                    <label for="pseudo">Pseudo </label>
                </div>

                <br>

                <div class="form-floating border-primary d-flex ">
                    <textarea name="message" class="form-control" placeholder="message" id="message"></textarea>
                    <label for="message">Message:</label>
                </div>

                <br>
                <input type="submit" name="valider">


               
                <div class=process_pseudo> <br>
                    <?php include './process/process_pseudo.php' ?>
                </div>
            </form>
        </section>

    </main>

</body>



<?php include './partials/footer.php' ?>