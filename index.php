<?php include 'header.php' ?>
<?php require 'functions.php' ?>

<header> 
    <h1> Business Data Platform </h1>
</header>

    <section>

        <h2 id="dashboardSwitch" class="active">Dashboard</h2>
        <div id="dashboard"> 
            <p>Will Appear Here</p>
        </div>

        <h2 id="employeeSwitch" class="inactive">Employee Form</h2>
        <div id="employee"> 
            <form action="index.php" method="POST" id="employeeForm">

                <aside>
                    <p>First Name</p>
                    <input type="text" id="firstName" name="firstName" minlength="3" tabindex="1" required>
                    <p>Last Name</p>
                    <input type="text" id="lastName" name="lastName" minlength="3" tabindex="3" required>
                    <p>Home Address</p>
                    <input type="text" id="homeAddress" name="homeAddress" minlength="3" required>
                    <p>State</p>
                    <select id="state" name="state" required>
                        <option>--Select State--</option>
                        <?php printStates(); ?>
                    </select>
                    <p>License Date</p>
                    <input type="date" id="LD" name="LD" required>
                    <p>Salary</p>
                    <input type="number" id="salary" name="salary" minlength="4" required>
                </aside>
                <aside>
                    <p>Middle Initial</p>
                    <input type="text" id="MI" class="small" name="mi" maxlength="1" tabindex="2">
                    <p>Date of Birth</p>
                    <input type="date" id="DOB" name="DOB" required>
                    <p>Zip</p>
                    <input type="text" id="zip" name="zip" maxlength="5" required>
                    <p>Country</p>
                    <select id="country" name="country" required>
                        <option>--Select Country--</option>
                        <?php printCountries(); ?>
                    </select>
                    <p>Hire Date</p>
                    <input type="date" id="HD" name="HD" required>
                    <p>Termination Date</p>
                    <input type="date" id="TD" name="TD">
                </aside>

                <aside class="large">
                    <input type="submit" id="employeeSubmit" name="submit"value="Submit"></input> 
                </aside>

            </form>
        </div>

        <h2 id="accidentSwitch" class="inactive">Accident Form</h2>
        <div id="accident"> 
            <form action="index.php" method="POST" id="accidentForm">

                <aside>
                    <p>Affected Employee</p> <!-- drop down -->
                    <select id="name" name="name">
                        <option value="">--Select--</option>
                    </select>
                </aside>
                <aside>
                    <p>Accident Date</p>
                    <input type="date" id="AD" name="AD" required>
                </aside>

                <aside class="large">
                    <p>Location</p> 
                    <input type="text" id="location" name="location" minlength="3" required>
                    <p>Description</p>
                    <textarea id="description" name="description" minlength="3" cols="40" rows="5" required></textarea>
                    <input type="submit" id="accidentSubmit" name="submit" value="Submit">
                </aside>

            </form>
        </div>

        <p id="info"></p>
    </section>

<?php include 'footer.php' ?>
