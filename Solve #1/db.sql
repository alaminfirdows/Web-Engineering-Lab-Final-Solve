/*
*   Project:    Web-Engineering-Lab-Final-Solve
*   Version:    1.0.0
*   Author:     Al-Amin Firdows
*   Email:      alaminfirdows@gmail.com
*   Skype:      alamin.firdows
*   URI:        http://alamin.me
*   Github:     https://github.com/alaminfirdows/Web-Engineering-Lab-Final-Solve
*/

CREATE TABLE solve_1_student_data (
    `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` varchar (75) NOT NULL,
    `s_id` varchar (15),
    `age` float,
    `username` varchar (15),
    `password` varchar (75)
);