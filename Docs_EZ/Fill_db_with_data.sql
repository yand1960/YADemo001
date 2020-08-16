INSERT INTO `mydb`.`tblappointments`
(`id_Disc`,
`DisciplineName`,
`DEscription`)
VALUES
(1,
"Algebra",
"Algebra for Beginners");

INSERT INTO `mydb`.`tblappointments`
(`id_Disc`,
`DisciplineName`,
`DEscription`)
VALUES
(2,
"Algebra2",
"Advanced Algebra");

INSERT INTO `mydb`.`tblappointments`
(`id_Disc`,
`DisciplineName`,
`DEscription`)
VALUES
(3,
"Poetry1",
"Russian poetry 6+");

INSERT INTO `mydb`.`tblappointments`
(`id_Disc`,
`DisciplineName`,
`DEscription`)
VALUES
(4,
"Poetry2",
"Russian poetry 18+");

INSERT INTO `mydb`.`tblappointments`
(`id_Disc`,
`DisciplineName`,
`DEscription`)
VALUES
(5,
"Music",
"Music for Beginners");

INSERT INTO `mydb`.`tblevents` (`id_Exam`, `isApproved`, `TimeandDate`, `StudentName`, `tblEvents_id_Exam`, `tblAppointments_id_Disc`) VALUES ('2', '1', '2020-08-26', 'Ivanov Petr', '2', '2');
INSERT INTO `mydb`.`tblevents` (`id_Exam`, `isApproved`, `TimeandDate`, `StudentName`, `tblEvents_id_Exam`, `tblAppointments_id_Disc`) VALUES ('3', '1', '2020-08-27', 'Ivanov Petr', '3', '3');
INSERT INTO `mydb`.`tblevents` (`id_Exam`, `isApproved`, `TimeandDate`, `StudentName`, `tblEvents_id_Exam`, `tblAppointments_id_Disc`) VALUES ('4', '1', '2020-08-28', 'Ivanov Petr', '4', '4');
INSERT INTO `mydb`.`tblevents` (`id_Exam`, `isApproved`, `TimeandDate`, `StudentName`, `tblEvents_id_Exam`, `tblAppointments_id_Disc`) VALUES ('5', '1', '2020-08-29', 'Ivanov Petr', '5', '5');


SELECT * FROM mydb.tblappointments;
