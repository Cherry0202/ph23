SET character_set_client=utf8;
SET character_set_connection=utf8;
SET character_set_results=utf8;
SET character_set_server=utf8;

DROP DATABASE IF EXISTS ph23_kadai01;

CREATE DATABASE ph23_kadai01;

use ph23_kadai01;

CREATE table kadai01_users(
  id VARCHAR (20) PRIMARY KEY ,
  password VARCHAR (255) NOT NULL
);
