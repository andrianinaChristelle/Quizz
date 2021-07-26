create database quizz;
use quizz;

create or replace table question(
    id int not null auto_increment primary key ,
    numero int not null unique ,
    question varchar(200) not null
);
create or replace table reponse(
    id int not null auto_increment primary key ,
    id_question int not null  ,
    reponse varchar(100) not null ,
    typeRep boolean not null ,
    foreign key (id_question) references question(id)
);

UPDATE reponse
SET typerep = 1 ;


insert into reponse (id_question,reponse,typeRep) values(9,'test','1');

create or replace view questRep as
    select question.question , question.numero , reponse.reponse , reponse.typeRep , question.id 
    from reponse
    join question on reponse.id_question=question.id ;