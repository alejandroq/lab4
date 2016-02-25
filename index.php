<?php include 'header.php' ?>

<header> 
    <h1> Business Data Platform </h1>
</header>

    <section>
        <form action="index.php" method="POST" id="employeeForm">

            <aside>
                <p>First Name</p>
                <input type="text" id="firstName" name="firstName" minlength="3" tabindex="1" required>
                <p>Last Name</p>
                <input type="text" id="firstName" name="lastName" minlength="3" tabindex="3" required>
            </aside>
            <aside>
                <p>Middle Initial</p>
                <input type="text" id="MI" class="small" name="mi" maxlength="1" tabindex="2">
            </aside>

            <aside class="large">
                <input type="submit" id="employeeSubmit" name="submit"value="Submit"></input> 
                <span id="info"></span>
            </aside>

        </form>
    </section>

<?php include 'footer.php' ?>
