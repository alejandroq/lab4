CREATE TABLE HomeState(
	StateAbbreviation CHAR(2) NOT NULL PRIMARY KEY,
	StateName VARCHAR(25) NULL
);

CREATE TABLE Country(
	CountryAbbreviation CHAR(2) NOT NULL PRIMARY KEY,
	CountryName VARCHAR(35) NOT NULL
);

CREATE TABLE Employee(
	EmployeeId int NOT NULL PRIMARY KEY AUTO_INCREMENT,
	FirstName VARCHAR(30) NOT NULL,
	LastName VARCHAR(30) NOT NULL,
	MI CHAR(1) NULL,
	HomeAddress VARCHAR(30) NULL,
	Zip VARCHAR(5) NULL,
	DateOfBirth DATE NOT NULL, 
	HireDate DATE NOT NULL, 
	TerminationDate DATE NULL,
	Salary double NOT NULL, 
	LicenseDate DATE NULL,
	StateAbbreviation CHAR(2) NULL,
	CountryAbbreviation CHAR(2) NOT NULL
);

CREATE TABLE Accident(
	AccidentID int NOT NULL PRIMARY KEY AUTO_INCREMENT,
	DateOfAccident DATE NOT NULL, -- DD-MM-YY
	AccidentDescription VARCHAR(140) NOT NULL,
	AccidentLocation VARCHAR(20) NOT NULL,
	EmployeeID int NOT NULL
);

CREATE TABLE Truck(
	VinNumber int NOT NULL PRIMARY KEY,
	Make VARCHAR(25) NOT NULL,
	Model VARCHAR(20) NOT NULL,
	PriceAcquired double NOT NULL,
	LicenseDate VARCHAR(15) NOT NULL
);

CREATE TABLE EmployeeTruck(
	EmployeeID int NOT NULL,
	VinNumber int NOT NULL
);

ALTER TABLE Employee
ADD FOREIGN KEY (StateAbbreviation)
REFERENCES HomeState(StateAbbreviation);

ALTER TABLE Employee
ADD FOREIGN KEY (CountryAbbreviation)
REFERENCES Country(CountryAbbreviation);

ALTER TABLE Accident
ADD FOREIGN KEY (EmployeeID)
REFERENCES Employee(EmployeeID);

ALTER TABLE EmployeeTruck
ADD FOREIGN KEY (EmployeeID)
REFERENCES Employee(EmployeeID);

ALTER TABLE EmployeeTruck
ADD FOREIGN KEY (VinNumber)
REFERENCES Truck(VinNumber);

--Drops

DROP Table EmployeeTruck;
DROP Table Truck;
DROP Table Accident;
DROP Table Employee;
DROP Table HomeState;
DROP Table Country;

--Inserts

INSERT INTO HomeState VALUES
	('VA', 'Virginia'),
	('FL', 'Florida'),
	('CA', 'California'),
	('MS', 'Mississippi'),
	('CO', 'Colorado');

INSERT INTO Country VALUES 
	('US', 'United States of America'),
	('SE', 'Sweden'),
	('DE', 'Germany'),
	('PL', 'Poland'),
	('ES', 'Spain');

INSERT INTO Truck VALUES
	(1, 'Full-Size Pick-Ups', 'Ford F-150', 26000, 'TRCK123'),
	(2, 'Mid-Size Pick-Ups', 'Ford F-160', 26000, 'TRCK124'),
	(3, 'Super-Size Pick-Ups', 'Ford F-170', 26000, 'TRCK125'),
	(4, 'Tiny-Size Pick-Ups', 'Ford F-180', 26000, 'TRCK126'),
	(5, 'Micro-Size Pick-Ups', 'Ford F-190', 26000, 'TRCK127');
