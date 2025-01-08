# iJeca Application Overview

Watch the following video to see how the iJeca website looks and functions:

<video width="600" controls>
    <source src="assets/videos/overview.mp4" type="video/mp4">
    Your browser does not support the video tag.
</video>

# Cloning the iJeca Repository

Follow these steps to clone the iJeca repository:

1. **Open your terminal or command prompt.**

2. **Navigate to the `htdocs` directory.** 
    ```sh
    cd /C:/xampp/htdocs
    ```

3. **Clone the repository using the `git clone` command.**
    ```sh
    git clone https://github.com/dipendudhali/iJeca.git
    ```

4. **Navigate into the cloned repository.**
    ```sh
    cd iJeca
    ```

You have successfully cloned the iJeca repository!

# Setting Up the Database

Follow these steps to set up the database and import the `jeca.sql` file:

1. **Open your web browser and go to phpMyAdmin.**
    - Typically, you can access it by navigating to `http://localhost/phpmyadmin`.

2. **Log in to phpMyAdmin.**
    - Use your MySQL username and password.

3. **Create a new database named `jeca`.**
    - Click on the "New" button in the left sidebar.
    - Enter `jeca` as the name for your database and click "Create".

4. **Select the newly created `jeca` database.**
    - Click on the database name `jeca` in the left sidebar.

5. **Import the `jeca.sql` file from `assets/tables`.**
    - Click on the "Import" tab in the top menu.
    - Click on the "Choose File" button and navigate to `assets/tables` to select the `jeca.sql` file.
    - Click the "Go" button to start the import process.

You have successfully set up the `jeca` database and imported the `jeca.sql` file!

# Viewing the iJeca Application

Follow these steps to view the iJeca application in your web browser:

1. **Start your Apache and MySQL servers.**
    - Open the XAMPP Control Panel.
    - Click the "Start" button next to "Apache" and "MySQL".

2. **Open your web browser and go to the iJeca application.**
    - Navigate to `http://localhost/iJeca`.

You should now be able to view and interact with the iJeca application!