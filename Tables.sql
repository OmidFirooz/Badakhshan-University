CREATE TABLE Faculty(
    fac_id INT PRIMARY KEY AUTO_INCREMENT,
    facultyName VARCHAR(64) UNIQUE
);

CREATE TABLE Department(
    depId INT PRIMARY KEY AUTO_INCREMENT,
    departmentName VARCHAR(64) UNIQUE,
    faculty VARCHAR(64),
    FOREIGN KEY (faculty) REFERENCES Faculty(facultyName) ON DELETE CASCADE
);

CREATE TABLE Student (
    StudentID INT PRIMARY KEY AUTO_INCREMENT,
    FirstName VARCHAR(50),
    LastName VARCHAR(50),
    DateOfBirth DATE,
    Gender CHAR(1),
    EnrollmentDate DATE,
    Email VARCHAR(100),
    PhoneNumber VARCHAR(15),
    Photo BLOB,
    Department VARCHAR(50),
    FOREIGN KEY (Department) REFERENCES Department(departmentName) ON DELETE CASCADE
);

CREATE TABLE Teacher (
    TeacherID INT PRIMARY KEY AUTO_INCREMENT,
    FirstName VARCHAR(50),
    LastName VARCHAR(50),
    DateOfBirth DATE,
    Gender CHAR(1),
    HireDate DATE,
    Email VARCHAR(100),
    PhoneNumber VARCHAR(15),
    Department VARCHAR(50),
    Photo BLOB,
    FOREIGN KEY (Department) REFERENCES Department(departmentName) ON DELETE CASCADE
);


INSERT INTO Faculty VALUES 
(1, 'Computer Science'),
(2, 'Law and Political Science');

INSERT INTO Department VALUES
(1, 'Information Technology', 'Computer Science'),
(2, 'Information System', 'Computer Science'),
(3, 'Management and Deplomotic', 'Law and Political Science'),
(4, 'Judicial', 'Law and Political Science');


INSERT INTO Student VALUES
(1, 'Omid', 'Firooz', '2000-05-15', 'M', '2020-09-01', 'omid.firoz@example.com', '123-456-7890', NULL,'Information System'),
(2, 'Saheb', 'Sahebzad', '2001-05-22', 'M', '2019-09-01', 'saheb.sahebzad@example.com', '123-456-7891', NULL,'Management and Deplomotic');

INSERT INTO Teacher (TeacherID, FirstName, LastName, DateOfBirth, Gender, HireDate, Email, PhoneNumber, Department, Photo)
VALUES 
(1, 'Moheb', 'Mohebi', '1980-03-12', 'F', '2010-08-15', 'moheb.mohebi@example.com', '123-456-7892', 'Information System', NULL),
(2, 'Mohamad', 'Safai', '1975-07-25', 'M', '2008-08-15', 'mohamad.safai@example.com', '123-456-7893', 'Judicial', NULL);