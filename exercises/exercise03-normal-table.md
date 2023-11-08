| Syntax    | Description |
| --------- | ----------- |
| Header    | Title       |
| Paragraph | Text        |

## Exercise Normalization 05:Book Table 

Table data: Book, Genre, Author, Author Nationality

|Book             | Genre         |Author        | 
|-----------------|---------------|--------------| 
|Twenty thousands |Science-Fiction|Jules Verne   |
|Journey to the.. |Science-Fiction|Jules Verne   |
|Leaves of grass  |Poetry         |Walt Whitman  |

|Author           | Author Nationality |        
|-----------------|--------------------|
|Jules Verne      |French              |
|Walt Whitman     |American            |
|Leo Tolstoy      |Russian             |


## Exercise Normalization 04: Another Emnployee Table

Table data: EMPLOYEE_ID, NAME, JOB_CODE, JOB, STATE_CODE, HOME_STATE

EMPLOYEE_ID is primary key

|EMPLOYEE_ID | NAME     |STATE_CODE | 
|------------|----------|-----------| 
| E001       | ALICE    |26         |
| E002       | BOB      |56         |
| E003       | ALICE    |56         |

|JOB_CODE    | JOB      |
|------------|----------|
| J01        | CHEF     |
| J02        | WAITER   |
| J03        |BARTENDER |

|EMPLOYEE_ID | JOB_CODE |
|------------|----------|
| E001       | J01      |
| E001       | J02      |
| E002       | J02      |
| E002       | J03      |
| E003       | J01      |


State code and state are connected, so I will create another table.. feels like makes sense.. 
|STATE_CODE  |HOME_STATE |
|------------|-----------|
| 26         | MICHIGAN  |
| 56         | WYOMING   |


## Exercise Normalization 03: Employees of InstantCover and their contracts to work at hotels 

Table data:NIN, contractNo, hoursPerWeek, eName, hotelNo, hotelLocation

hotelNo is a primary key
| hotelNo | hotelLocation |contractNo   | 
| ------- | ------------- |-------------|
|H25      |Edinburgh      |C1024        |
|H4       |Glasgow        |C1025        |

NIN is primary key ...
I think hotelNo can be used as a foreign key in this table but I am not sure which practice would be better, creating a seperate table for NIN and hotelNo or using hotelNo in here as a foreign key.. 

| NIN     | eName         |hoursPerWeek | hotelNo |
| ------- | ------------- |-------------|---------|
|113567WD |John Smith     |16           |C1024    |
|234111XA |Diane Hocine   |24           |C1024    |
|712670YD |Sarah White    |28           |C1025    |
|113567WD |John Simith    |16           |C1025    |


***** alternative approach ... in the case if I take of hotelNo- foreign key from the table above. 

hotelNo is a primary key
| hotelNo | hotelLocation |contractNo   | 
| ------- | ------------- |-------------|
|H25      |Edinburgh      |C1024        |
|H4       |Glasgow        |C1025        |


NIN is a primary key 
| NIN     | eName         |hoursPerWeek |
| ------- | ------------- |-------------|
|113567WD |John Smith     |16           |
|234111XA |Diane Hocine   |24           |
|712670YD |Sarah White    |28           |
|113567WD |John Simith    |16           |


| NIN     | hotelNo       |
| ------- | ------------- |
|113567WD |John Smith     |
|234111XA |Diane Hocine   |
|712670YD |Sarah White    |
|113567WD |John Simith    |


## Exercise Normalization 02: Patient Dental Appointmentn

Table data: staffNo, dentistName, patientNo, patientName, appointment (date - time ), surgeryNo

staffNo Primary Key
| staffNo    | dentistName   |
| ---------- | ------------- |
| S1011      | Tony Smith    |
| S1024      | Helen Pearson |
| S1032      | Robin Pleving |

patientNo Primary Key

| patientNo  | patientName   |
| ---------- | ------------- |
| P100       |Gillian White  |
| P105       |Jill Well      |
| P108       |Ian MacKay     |
| P110       |John Walker    |


staff no - patient no foreign key
                       appointment 
staffNo| patientNo| Date       Time    |surgeryNo|
-------| ---------| ------------------ |---------|
S1011  | P100     | 12 Aug 03   10.00  |S10      |
S1011  | P105     | 13 Aug 03   12.00  |S15      |
S1024  | P108     | 12 Sep 03   10.00  |S10      |
S1024  | P108     | 14 Sep 03   12.00  |S10      |
S1032  | P105     | 14 Oct 03   16.30  |S15      |
S1032  | P110     | 15 Oct 03   18.00  |S13      |



## Exercise Normalization 01
[A table with the students and their grades in different topics.- Link](http://www.gitta.info/LogicModelin/en/html/DataConsiten_selfAssessment5.html)

Table data: UnitID, StudentID, Date, TutorID, Topic, Room, Grade, Book,TutEmail

Student ID is primary key

| SudentID    | 
| ----------  | 
| St1         | 
| St2         |
| St4         |


| TutorID    | Tutor email   |
| ---------- | ------------- |
| 1          | tut1@fhbb.ch  |
| 3          | tut3@fhbb.ch  |
| 5          | tut5@fhbb.ch  |


Unit ID is primary Key - Tutor ID is foreign key
| UnitID     | Date          | Room    | Book     |Topic  | TutorID
| ---------- | ------------- |---------|----------|-------|-------
| 1          | 23/02/03      |629      |Deumlich  |GMT    | Tut1
| 2          | 18/11/02      |631      |Zehnder   |GIn    | Tut3
| 4          | 04/07/03      |621      |SwissTopo |AVQ    | Tut5
| 5          | 05/05/03      |632      |Dümmlers  |PhF    | Tut3



Student ID   | UnitID  |Grade    | 
| ---------- | ------  |---------|
| St1        | 1       |4.7      |
| St1        | 2       |5.1      |
| St2        | 5       |4.9      |
| St2        | 4       |5.0      |
