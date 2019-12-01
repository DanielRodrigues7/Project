-- create tables
create table create_procedure_recuperarsenh (
    in_senha                       varchar2(50)
)
;

create table ifselect_count_from_login_wher (
    begin_id                       number,
    end_if                         varchar2(4000)
)
;

create table update_login_set_senha_senha (
    ifselect_count_from_login_wher number,
    where_email_email              varchar2(255)
)
;


-- triggers
create or replace trigger create_procedure_recuperar_biu
    before insert or update 
    on create_procedure_recuperarsenh
    for each row
begin
    null;
end create_procedure_recuperar_biu;
/

create or replace trigger ifselect_count_from_login__biu
    before insert or update 
    on ifselect_count_from_login_wher
    for each row
begin
    null;
end ifselect_count_from_login__biu;
/

create or replace trigger update_login_set_senha_sen_biu
    before insert or update 
    on update_login_set_senha_senha
    for each row
begin
    null;
end update_login_set_senha_sen_biu;
/

