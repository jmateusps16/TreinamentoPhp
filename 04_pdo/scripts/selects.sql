SET search_path TO phppdo;

select * from phppdo.students 
	join phppdo.phones on phones.student_id = students.id