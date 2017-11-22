CREATE TABLE tb_user (
    id INT AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    documento VARCHAR(255) NOT NULL,
    tp_user int not null,
    pwd VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
);

create table tb_tipo_consulta (
	id int auto_increment,
    tipo varchar(255) not null,
    duracao double not null,
    primary key (id)
);

CREATE TABLE tb_consulta (
	id INT AUTO_INCREMENT,
	id_medico INT NOT NULL,
    id_user INT NOT NULL,
	inicio_consulta datetime not null,
    id_tp_consulta int not null,
    PRIMARY KEY (id),
    FOREIGN KEY (id_medico) REFERENCES tb_medico (id),
    FOREIGN KEY (id_user) REFERENCES tb_user (id),
    foreign key (id_tp_consulta) references tb_tipo_consulta (id)
);

