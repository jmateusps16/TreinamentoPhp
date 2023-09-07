SET search_path TO phppdo;

-- Inserir 10 students
INSERT INTO students (id, name, birth_date)
VALUES
    (1, 'João da Silva', '1995-05-15'),
    (2, 'Maria Oliveira', '1993-08-22'),
    (3, 'Pedro Santos', '1990-11-10'),
    (4, 'Ana Pereira', '1998-02-05'),
    (5, 'Lucas Fernandes', '1992-04-30'),
    (6, 'Larissa Souza', '1997-07-25'),
    (7, 'Rafael Gomes', '1994-01-17'),
    (8, 'Juliana Costa', '1991-09-12'),
    (9, 'Bruno Almeida', '1996-03-08'),
    (10, 'Mariana Lima', '1999-12-03');

-- Inserir telefones para 5 dos students
INSERT INTO phones (id, area_code, phone_number, student_id)
VALUES
    (1, '87', '987654321', 1), -- João da Silva tem telefone
    (2, '87', '987653512', 1), -- João da Silva tem telefone
    (3, '81', '876543210', 2), -- Maria Oliveira tem telefone
    (4, '11', '765432109', 3), -- Pedro Santos tem telefone
    (5, '83', '654321098', 4), -- Ana Pereira tem telefone
    (6, '85', '543210987', 5); -- Lucas Fernandes tem telefone