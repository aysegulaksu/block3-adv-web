 

| Syntax    | Description |
| --------- | ----------- |
| Header    | Title       |
| Paragraph | Text        |

## Exercise Normalization 05:Book Table 


Table data: Book, Genre, Author, Author Nationality
Version 1- I feel like there had to be book id and author id as well in this table... 

|Book             | Genre         |
|-----------------|---------------|
|Twenty thousands |Science-Fiction|
|Journey to the.. |Science-Fiction|
|Leaves of grass  |Poetry         |

|Author           | Author Nationality |        
|-----------------|--------------------|
|Jules Verne      |French              |
|Walt Whitman     |American            |
|Leo Tolstoy      |Russian             |


|Book             | Author             |        
|-----------------|--------------------|
|Twenty thousands |Jules Verne         |
|Journey to the.. |Jules Verne         |
|Leaves of grass  | Walt Whitman       |
 
version 2-  After the second review, I have a feeling that Version2 is not correct approach.... 

book is primary key - author is foreign key 
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

*********UPDATE: REVIEWING THE READING ON THE NORMALIZATION, IT SEEMS V1 IS A BETTER APPROACH

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


-----
This is the V2 and it seems not the best approach.. 

hotelNo is a primary key
| hotelNo | hotelLocation |contractNo   | 
| ------- | ------------- |-------------|
|H25      |Edinburgh      |C1024        |
|H4       |Glasgow        |C1025        |

 

| NIN     | eName         |hoursPerWeek | hotelNo |
| ------- | ------------- |-------------|---------|
|113567WD |John Smith     |16           |C1024    |
|234111XA |Diane Hocine   |24           |C1024    |
|712670YD |Sarah White    |28           |C1025    |
|113567WD |John Simith    |16           |C1025    |




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

I feel like there shoudl have been a student name column... 

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

-------

## TEACHER'S SOLUTION 
# Normalization Exercise

## Exercise 1

### Problem

| UnitID | StudentID | Date     | TutorID | Topic | Room | Grade | Book      | TutEmail     |
| ------ | --------- | -------- | ------- | ----- | ---- | ----- | --------- | ------------ |
| U1     | St1       | 23.02.03 | Tut1    | GMT   | 629  | 4.7   | Deumlich  | tut1@fhbb.ch |
| U2     | St1       | 18.11.02 | Tut3    | GIn   | 631  | 5.1   | Zehnder   | tut3@fhbb.ch |
| U1     | St4       | 23.02.03 | Tut1    | GMT   | 629  | 4.3   | Deumlich  | tut1@fhbb.ch |
| U5     | St2       | 05.05.03 | Tut3    | PhF   | 632  | 4.9   | Dümmlers  | tut3@fhbb.ch |
| U4     | St2       | 04.07.03 | Tut5    | AVQ   | 621  | 5.0   | SwissTopo | tut5@fhbb.ch |

### Solution

| UnitID | StudentID | Grade |
| ------ | --------- | ----- |
| U1     | St1       | 4.7   |
| U2     | St1       | 5.1   |
| U1     | St4       | 4.3   |
| U5     | St2       | 4.9   |
| U4     | St2       | 5.0   |

| UnitID | TutorID | Room | Date     |
| ------ | ------- | ---- | -------- |
| U1     | Tut1    | 629  | 23.02.03 |
| U2     | Tut3    | 631  | 18.11.02 |
| U1     | Tut1    | 629  | 23.02.03 |
| U5     | Tut3    | 632  | 05.05.03 |
| U4     | Tut5    | 621  | 04.07.03 |

| UnitID | Topic |
| ------ | ----- |
| U1     | GMT   |
| U2     | GIn   |
| U5     | PhF   |
| U4     | AVQ   |

| Topic | Book      |
| ----- | --------- |
| GMT   | Deumlich  |
| GIn   | Zehnder   |
| PhF   | Dümmlers  |
| AVQ   | SwissTopo |

| TutorID | TutEmail     |
| ------- | ------------ |
| Tut1    | tut1@fhbb.ch |
| Tut3    | tut3@fhbb.ch |
| Tut5    | tut5@fhbb.ch |

## Exercise 2

### Problem

| EMPLOYEE_ID | NAME  | JOB_CODE | JOB       | STATE_CODE | HOME_STATE |
| ----------- | ----- | -------- | --------- | ---------- | ---------- |
| E001        | Alice | J01      | Chef      | 26         | Michigan   |
| E001        | Alice | J02      | Waiter    | 26         | Michigan   |
| E002        | Bob   | J02      | Waiter    | 56         | Wyoming    |
| E002        | Bob   | J03      | Bartender | 56         | Wyoming    |
| E003        | Alice | J01      | Chef      | 56         | Wyoming    |

### Solution

| EMPLOYEE_ID | JOB_CODE |
| ----------- | -------- |
| E001        | J01      |
| E001        | J02      |
| E002        | J02      |
| E002        | J03      |
| E003        | J01      |

| JOB_CODE | JOB       |
| -------- | --------- |
| J01      | Chef      |
| J02      | Waiter    |
| J03      | Bartender |

| EMPLOYEE_ID | NAME  | STATE_CODE |
| ----------- | ----- | ---------- |
| E001        | Alice | 26         |
| E002        | Bob   | 56         |
| E003        | Alice | 56         |

| STATE_CODE | HOME_STATE |
| ---------- | ---------- |
| 26         | Michigan   |
| 56         | Wyoming    |

## Exercise 3

### Problem

| Book                                  | Genre                   | Author              | Nationality |
| ------------------------------------- | ----------------------- | ------------------- | ----------- |
| Twenty Thousand Leagues Under the Sea | Science Fiction         | Jules Verne         | French      |
| Journey to the Center of the Earth    | Science Fiction         | Jules Verne         | French      |
| Leaves of Grass.                      | Poetry                  | Walt Whitman        | American    |
| Anna Karenina.                        | Literary                | Fiction Leo Tolstoy | Russian     |
| A Confession                          | Religious Autobiography | Leo Tolstoy         | Russian     |

### Solution

| Book                                  | Author              |
| ------------------------------------- | ------------------- |
| Twenty Thousand Leagues Under the Sea | Jules Verne         |
| Journey to the Center of the Earth    | Jules Verne         |
| Leaves of Grass.                      | Walt Whitman        |
| Anna Karenina.                        | Fiction Leo Tolstoy |
| A Confession                          | Leo Tolstoy         |

| Book                                  | Genre                   |
| ------------------------------------- | ----------------------- |
| Twenty Thousand Leagues Under the Sea | Science Fiction         |
| Journey to the Center of the Earth    | Science Fiction         |
| Leaves of Grass.                      | Poetry                  |
| Anna Karenina.                        | Literary                |
| A Confession                          | Religious Autobiography |

| Author              | Nationality |
| ------------------- | ----------- |
| Jules Verne         | French      |
| Walt Whitman        | American    |
| Fiction Leo Tolstoy | Russian     |
| Leo Tolstoy         | Russian     |

## Exercise 4

### Problem

[Source](https://www.javaguicodexample.com/normalizationexerciseanswer.pdf)

Details of patient dental appointments.

| staffNo | dentistName   | patientNo | patientName   | appointment date / time | surgeryNo |
| ------- | ------------- | --------- | ------------- | ----------------------- | --------- |
| S1011   | Tony Smith    | P100      | Gillian White | 12-Aug-03 10:00         | S10       |
| S1011   | Tony Smith    | P105      | Till Bell     | 13-Aug-03 12:00         | S15       |
| S1024   | Helen Pearson | P108      | Tan MacKay    | 12-Sept-03 10:00        | S10       |
| S1024   | Helen Pearson | P108      | Tan MacKay    | 14-Sept-03 10:00        | S10       |
| S1032   | Robin Plevin  | P105      | Till Bell     | 14-0ct-03 16:30         | S15       |
| S1032   | Robm Plevin   | P110      | Toba Walker   | 15-0ct-03 18:00         | S13       |

### Solution

| staffNo | appointment date / time | surgeryNo |
| ------- | ----------------------- | --------- |
| S1011   | 12-Aug-03 10:00         | SI0       |
| S1011   | 13-Aug-03 12:00         | SIS       |
| S1024   | 12-Sept-03 10:00        | S10       |
| S1024   | 14-Sept-03 10:00        | S10       |
| S1032   | 14-0ct-03 16:30         | SI5       |
| S1032   | 15-0ct-03 18:00         | S13       |

| staffNo | dentistName   |
| ------- | ------------- |
| S1011   | Tony Smith    |
| S1024   | Helen Pearson |
| S1032   | Robin Plevin  |
| S1032   | Robm Plevin   |

| patientNo | patientName   |
| --------- | ------------- |
| P100      | Gillian White |
| P105      | Till Bell     |
| P108      | Tan MacKay    |
| P110      | Toba Walker   |

| staffNo | appointment date / time | surgeryNo | patientNo |
| ------- | ----------------------- | --------- | --------- |
| S1011   | 12-Aug-03 10:00         | SI0       | P100      |
| S1011   | 13-Aug-03 12:00         | SIS       | P105      |
| S1024   | 12-Sept-03 10:00        | S10       | P108      |
| S1024   | 14-Sept-03 10:00        | S10       | P108      |
| S1032   | 14-0ct-03 16:30         | SI5       | P105      |
| S1032   | 15-0ct-03 18:00         | S13       | P110      |

## Exercise 5

### Problem

[Source](https://www.javaguicodexample.com/normalizationexerciseanswer.pdf)

Employees of InstantCover and their contracts to work at hotels.

| NIN      | contractNo | hoursPerWeek | eName        | hoteINo | hotelLocation |
| -------- | ---------- | ------------ | ------------ | ------- | ------------- |
| 113567WD | C1024      | 16           | John Smith   | H25     | Edinburgh     |
| 234111XA | C1024      | 24           | Diane Hocine | H25     | Edinburgh     |
| 712670YD | C1025      | 28           | Sarah White  | H4      | Glasgow       |
| 113567WD | C1025      | 16           | John Smith   | H4      | Glasgow       |

### Solution

| NIN      | contractNo | hoursPerWeek |
| -------- | ---------- | ------------ |
| 113567WD | C1024      | 16           |
| 234111XA | C1024      | 24           |
| 712670YD | C1025      | 28           |
| 113567WD | C1025      | 16           |

| NIN      | eName        |
| -------- | ------------ |
| 113567WD | John Smith   |
| 234111XA | Diane Hocine |
| 712670YD | Sarah White  |

| hoteINo | hotelLocation |
| ------- | ------------- |
| H25     | Edinburgh     |
| H4      | Glasgow       |

| contractNo | hoteINo |
| ---------- | ------- |
| C1024      | H25     |