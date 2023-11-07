| Syntax    | Description |
| --------- | ----------- |
| Header    | Title       |
| Paragraph | Text        |

## Exercise Normalization : Employees of InstantCover and their contracts to work at hotels

Table data:NIN, contractNo, hoursPerWeek, eName, hotelNo, hotelLocation

## Exercise Normalization : Patient Dental Appointment

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



## Exercise Normalization 
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
