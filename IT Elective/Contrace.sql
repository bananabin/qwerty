CREATE DATABASE contrace;

use contrace;

CREATE TABLE user_info (
    user_id serial not null,
    fname varchar(50) not null,
    lname varchar(50) not null,
    street_barangay varchar(50) not null,
    city_municipality varchar(50) not null,
    province varchar(50) not null,
    mobile_number varchar(11) null,
    email varchar(50) null,
    survey_date date,
    survey_time time,
    PRIMARY KEY (user_id)
);



CREATE table survey_table (
    user_id serial not null,
    Q1 varchar(200) not null,
    Q2 varchar(10) not null,
    Q3 varchar(10) not null,
    Q4 varchar(10) not null,
    Q5 varchar(10) not null,
    place varchar(50) null,
    PRIMARY KEY (user_id),
    foreign key(user_id) references user_info(user_id)
);



Select * from user_info
inner join survey_table
on user_info.user_id = survey_table.user_id;

