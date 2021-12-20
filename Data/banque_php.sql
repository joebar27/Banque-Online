-- Création de la base de donnée :
DROP DATABASE IF EXISTS banque_php;
CREATE DATABASE banque_php CHARACTER
SET
    'utf8';
USE banque_php;

-- Creation de l'utilisateur de la base de donnée.
DROP user IF EXISTS 'BanquePHP'@'Localhost';
CREATE USER 'BanquePHP'@'Localhost';
-- allocation des droits pour la base de donné danque_php pour l'utilisateur BanquePHP avec le mot de passe banque76.
GRANT ALL PRIVILEGES ON banque_php.* To 'BanquePHP'@'Localhost' IDENTIFIED BY 'banque76';

-- Création de la table utilisateur :
CREATE TABLE
    Customers (
        id INT UNSIGNED NOT NULL AUTO_INCREMENT,
        firstname VARCHAR (255) NOT NULL,
        lastname VARCHAR (255) NOT NULL,
        birthdayDate DATE NOT NULL,
        sex CHAR(3) NOT NULL,
        adress VARCHAR (255) NOT NULL,
        city VARCHAR (255) NOT NULL,
        postalCode CHAR(5) NOT NULL,
        country VARCHAR (50) NOT NULL,
        phoneNb VARCHAR (20) NOT NULL,
        email VARCHAR (100) NOT NULL,
        login VARCHAR (100) NOT NULL UNIQUE,
        password VARCHAR (100) NOT NULL,
        PRIMARY KEY(id)
    ) ENGINE = InnoDB;
-- Ajout données utilisateur :
INSERT INTO
    Customers (
        firstname,
        lastname,
        birthdayDate,
        sex,
        adress,
        city,
        postalCode,
        country,
        phoneNb,
        email,
        login,
        password
    )
VALUES (
        "ANGER",
        "Romain",
        "1987-06-13",
        "Mr",
        "4 chemin des longueraies",
        "Jonquerets de livet",
        "27410",
        "France",
        "0695915444",
        "anger.romain@gmail.com",
        "joebar27",
        "azerty"
    ), (
        "AUGE",
        "Laura",
        "1989-05-02",
        "Mme",
        "4 chemin des longueraies",
        "Jonqueret de livet",
        "27410",
        "France",
        "0637949157",
        "auge.laura27@gmail.com",
        "louloute378",
        "123456"
    );
-- Création de la table des comptes :
CREATE TABLE
    Accounts (
        id INT UNSIGNED NOT NULL AUTO_INCREMENT,
        accountNb VARCHAR (50) NOT NULL,
        typeAccount VARCHAR (50) NOT NULL,
        solde INT NOT NULL,
        createAccountDate DATE NOT NULL,
        customers_id INT UNSIGNED,
        PRIMARY KEY (id),
        FOREIGN KEY(customers_id) REFERENCES Customers(id)
    ) ENGINE = InnoDB;
-- Ajout données utilisateur :
INSERT INTO
    Accounts (accountNb, typeAccount, solde, createAccountDate, customers_id)
VALUES ("N0900123456", "Compte courant", 50, "2021-09-01", 1), 
        ("N0900654321", "Livret A", 1250, "2021-09-10", 1), 
        ("N0900654123", "PEL", 650, "2021-09-05", 1),
        ("N0900321654", "Compte courant", 450, "2021-09-01", 2), 
        ("N0900456123", "Livret A", 2150, "2021-09-10", 2), 
        ("N0900162534", "PEL", 1650, "2021-09-05", 2);
-- Création de la table des opérations bancaire :
CREATE TABLE
    Deal (
        id INT UNSIGNED NOT NULL AUTO_INCREMENT,
        dealNb INT (10) NOT NULL,
        dealType VARCHAR(10) NOT NULL,
        description VARCHAR (100) NOT NULL,
        amount DECIMAL (10, 2) NOT NULL,
        dealDate DATETIME NOT NULL,
        customers_id INT UNSIGNED,
        account_id INT UNSIGNED,
        PRIMARY KEY (id),
        FOREIGN KEY (customers_id) REFERENCES Customers(id),
        FOREIGN KEY (account_id) REFERENCES Accounts(id)
    ) ENGINE = InnoDB;
-- Ajout données de transaction :
INSERT INTO
    Deal (
        dealNb,
        dealType,
        description,
        amount,
        dealDate,
        customers_id,
        account_id
    )
VALUES (
        744484066,
        "débit",
        "Achat pull moche de noel",
        34.99,
        NOW(),
        2,
        4
    ), (
        700896893,
        "crédit", 
        "Salaire", 
        1850.00, 
        NOW(), 
        1, 
        1
    ), (
        702329482,
        "débit", 
        "Virement vers livret A", 
        850.00, 
        NOW(), 
        2, 
        1
    ), (
        731207267,
        "Crédit",
        "Virement depuis compte courant",
        850.00,
        NOW(),
        2,
        2
    );