<?php include 'header.php' ?>

<header> 
    <h1> Business Data Platform </h1>
</header>

    <section>
        <form action="index.php" method="POST" id="employeeForm">
            <aside>
                <p>Employee First Name</p>
                <input type="text" id="firstName" name="firstName" required>
                <p>Last Name</p>
                <input type="text" id="firstName" name="lastName" required>
            </aside>
            <aside>
                <p>Middle Initial</p>
                <input type="text" id="MI" name="mi" required>
            </aside>

            <input type="submit" id="employeeSubmit" name="submit" value="Submit"></input>

        </form>
        <span id="info"></span>
    </section>

<?php include 'footer.php' ?>
