CREATE DATABASE IF NOT EXISTS AttendanceSystemDB;

USE AttendanceSystemDB;

CREATE TABLE IF NOT EXISTS coursesTbl(
    courseID INT NOT NULL AUTO_INCREMENT,
    courseName VARCHAR(100) NOT NULL,
    description VARCHAR(255),
    courseStatus INT NOT NULL DEFAULT 1,
    CONSTRAINT PK_Courses PRIMARY KEY (courseID),
    UNIQUE (courseName)
);

CREATE TABLE IF NOT EXISTS accountsTbl(
    accountID INT NOT NULL,
    username VARCHAR(320) NOT NULL,
    password VARCHAR(255) NOT NULL,
    userType INT NOT NULL DEFAULT 3,
	FirstName VARCHAR(100) NOT NULL,
	MiddleName VARCHAR(100),
	LastName VARCHAR(100)NOT NULL,
	Birthdate DATE NOT NULL,
    courseID INT NOT NULL,
	secondary_email VARCHAR(320) NOT NULL,
    accountStatus INT NOT NULL DEFAULT 1,
    CONSTRAINT PK_Accounts PRIMARY KEY (accountID),
    CONSTRAINT FK_AccountCourse FOREIGN KEY (courseID) REFERENCES coursesTbl(courseID) ON DELETE CASCADE ON UPDATE CASCADE,
    UNIQUE (username)
);

CREATE TABLE IF NOT EXISTS subjectsTbl(
    subjectNumber INT NOT NULL AUTO_INCREMENT,
    subjectName VARCHAR(100) NOT NULL,
    subjectDescription VARCHAR(255),
    courseID INT NOT NULL,
    subjectStatus INT NOT NULL DEFAULT 1,
    CONSTRAINT PK_Subjects PRIMARY KEY (subjectNumber),
    CONSTRAINT FK_SubjectCourse FOREIGN KEY (courseID) REFERENCES coursesTbl(courseID) ON DELETE CASCADE ON UPDATE CASCADE
);


CREATE TABLE IF NOT EXISTS sectionsTbl(
    sectionNumber INT NOT NULL AUTO_INCREMENT,
    subjectNumber INT NOT NULL,
    schedule VARCHAR(100) NOT NULL,
    sectionStatus INT NOT NULL DEFAULT 1,
    CONSTRAINT PK_Sections PRIMARY KEY (sectionNumber),
    CONSTRAINT FK_SectionSubject FOREIGN KEY (subjectNumber) REFERENCES subjectsTbl(subjectNumber) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE IF NOT EXISTS sectionDetailsTbl(
    sectionNumber INT NOT NULL,
    accountID INT NOT NULL,
    CONSTRAINT FK_SubjectDetails FOREIGN KEY (sectionNumber) REFERENCES sectionsTbl(sectionNumber) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE IF NOT EXISTS attendanceLogsTbl(
    sectionNumber INT NOT NULL,
    accountID INT NOT NULL,
    date_time DATETIME NOT NULL DEFAULT NOW(),
    attendanceStatus INT NOT NULL DEFAULT 1,
    CONSTRAINT FK_AttendanceSection FOREIGN KEY (sectionNumber) REFERENCES sectionsTbl(sectionNumber) ON DELETE CASCADE ON UPDATE CASCADE,
    CONSTRAINT FK_AttendanceAccount FOREIGN KEY (accountID) REFERENCES accountsTbl(accountID) ON DELETE CASCADE ON UPDATE CASCADE
);

INSERT INTO coursestbl (courseName, description)
VALUES ("Bachelor of Science in Computer Science", "Learn about theories, algorithms, and software engineering.");

INSERT INTO accountstbl (`username`, `password`, `userType`, `firstName`, `middleName`, `lastName`, `Birthdate`, `courseID`, `accountID`, `secondary_email`, `accountStatus`) VALUES
('wencel.de.lara@adamson.edu.ph', 'wrd.2023-07-11', 'administrator', 'Wencel', 'Reyes', 'De Lara', '2023-07-11', '1', '20230001', 'wrdelara@gmail.com', 3),
('vinard.damasco@adamson.edu.ph', 'vjd.2023-07-07', 'student', 'Vinard', 'James', 'Damasco', '2023-07-07', '1', '20230002', 'vdamasco@gmail.com', 2),
('john.jusayan@adamson.edu.ph', 'jmj.2023-07-05', 'faculty', 'John', 'Miguel', 'Jusayan', '2023-07-05', '1', '20230003', 'jusayan@gmail.com', 1),
('yvan.sinues@adamson.edu.ph', 'yms.2023-07-13', 'faculty', 'Yvan', 'Mendelez', 'Sinues', '2023-07-13', '1', '20230004', 'yvan@gmail.com', 0);