CREATE DATABASE gva_wnf;

USE gva_wnf;

CREATE TABLE articles (
    id int  NOT NULL AUTO_INCREMENT,
    title varchar(256)  NOT NULL,
    lang varchar(256) NOT NULL,
    filepath varchar(256) NOT NULL, 
    CONSTRAINT article_pk PRIMARY KEY  (id)
);

INSERT INTO articles (title,lang,filepath)
VALUES ('matematica','pt-br','pt-br/matematica.php')
,('mathematics','eng','eng/mathematics.php')
,('revisaophp','pt-br','pt-br/revisaophp.php');

INSERT INTO articles (title,lang,filepath)
VALUES ('test','pt-br','pt-br/test.php');

