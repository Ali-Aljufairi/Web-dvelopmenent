-- @BLOCK  Create DATABASE 
-- @conn Create DATABASE
Create DATABASE xuniversity;

-- The code is divide int to blocks so it will be easier to
--  run and will be more clear to the user and does each step does

-- @BLOCK  First Table 
-- @conn Create Table

CREATE Table Students (
    ID INT(11) PRIMARY KEY,
    Name VARCHAR(150) NOT NULL,
    major VARCHAR(50) NOT NULL,
    mobile BIGINT(20) NOT NULL
);

-- @BLOCK  insert data into student table
-- @conn Insert data into student table 
insert into
    students
VALUES
    (20195330, 'Ali', 'CS', '01678945678'),
    (20195331, 'Ahmed', 'CE', '01678945678'),
    (20195332, 'Redha', 'CE', '01678945678'),
    (20195333, 'Ahmed ', 'CS', '01678945678'),
    (20195334, 'Noor', 'SE', '01678945678'),
    (20195335, 'Osama', 'CE', '01678945678'),
    (20195336, 'Mike', 'CE', '01678945678'),
    (20195337, 'Akeel', 'CS', '01678945678'),
    (20195338, 'Akaa ', 'CE', '01678945678'),
    (20195339, 'Faiz', 'CE', '01678945678'),
    (20195340, 'Saed', 'CS', '01678945678'),
    (20195341, 'Ahmed  Ali', 'IS', '01678945678'),
    (20195342, 'Ahmed  Ali', 'IS', '01678945678'),
    (20195343, 'Ali Ahmed ', 'SE', '01678945678'),
    (20195344, 'Ali Ahmed ', 'CS', '01678945678'),
    (20195345, 'Ali Mohmmaed', 'EE', '01678945678'),
    (20195346, 'Redha Ali', 'CS', '01678945678'),
    (20195347, 'Bassam', 'IS', '01678945678'),
    (20195348, 'Yahya', 'CE', '01678945678');

-- @BLOCK  insert data into student table
-- @conn Create Table
CREATE Table Courses (
    code VARCHAR(7) PRIMARY KEY,
    Name VARCHAR(150) NOT NULL
);

-- @BLOCK  INSERT_METHOD
-- @conn Insert data into courses table
Insert into
    courses
Values
    ('CS101', 'Computer Archteiture'),
    ('CS102', 'Algorthim'),
    ('CS103', 'Operating system '),
    ('CS104', 'Computer Networks'),
    ('CS105', 'Computer Network 2'),
    ('CS106', 'Ai'),
    ('CS107', 'Machine learining '),
    ('CS108', 'Digital Design '),
    ('CS109', 'Interenet developmet'),
    ('CS110', 'Interenet developmet 2'),
    ('CS111', 'Automata'),
    ('CS138', 'Parrallel'),
    ('CS139', 'Computer Design '),
    ('CS140', 'Discrete Mathmaticies 2'),
    ('CS141', 'Discrete Mathmaticies 3'),
    ('CS142', 'Discrete Mathmaticies 4');

-- @BLOCK  insert data into student table
-- @conn Create Table
CREATE Table students_courses (
    st_ID int(11),
    Course_code VARCHAR(7) NOT NULL,
    PRIMARY KEY (st_ID, Course_code),
    FOREIGN KEY (st_ID) REFERENCES students(ID),
    FOREIGN KEY (Course_code) REFERENCES courses(code)
);

-- @BLOCK  Delete data from student table   
-- @conn Delete data from student table
Delete from
    Students
where
    ID = 20195330;

-- @BLOCK   Update
-- @conn Update    data from student table  
Update
    Students
set
    Name = 'Jonnath'
where
    ID = 20195331;

-- @Block   MODIFY Table 
-- @conn Modify Table   
ALTER TABLE
    Students
ADD
    Second_name VARCHAR(150);

-- @Block   Search  
-- @conn Search
SELECT
    ID
FROM
    students
WHERE
    Name = 'Redha'
    AND major = 'CE';