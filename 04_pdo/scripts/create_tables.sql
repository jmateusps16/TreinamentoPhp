SET search_path TO phppdo;

create table if not exists students (
	id int primary key,
	name varchar(200),
	birth_date date
);

create table if not exists phones (
	id int primary key,
	area_code char(2),
	phone_number varchar(9),
	student_id int,
	foreign key (student_id) references students(id)
);
