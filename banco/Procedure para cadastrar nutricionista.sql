-- create tables
create table create_procedure_cadastrarnutr (
    in_nascimento                  date,
    in_especialidade               varchar2(34),
    in_email                       varchar2(30),
    in_senha                       varchar2(50),
    in_tel                         varchar2(15)
)
;

create table begin (
    the_else                       varchar2(4000)
)
;

create table if_select_count_from_login_whe (
    signal_sqlstade_45000          varchar2(4000),
    set_message_text_exixte        varchar2(4000)
)
;

create table insert_into_nutricionista_nome (
    begin_id                       number
                                   constraint insert_into_nutric_begin_id_fk
                                   references begin on delete cascade,
    values_nome_nascimento_current varchar2(4000),
    select_maxidnutricionista_into varchar2(4000)
)
;

create table insert_into_login_emailsenhanu (
    insert_into_nutricionista_nome number,
    values_email_senha             varchar2(255)
)
;

create table insert_into_telefones_celularn (
    insert_into_nutricionista_nome number,
    end_if                         varchar2(4000)
)
;


-- triggers
create or replace trigger begin_biu
    before insert or update 
    on begin
    for each row
begin
    null;
end begin_biu;
/

create or replace trigger create_procedure_cadastrar_biu
    before insert or update 
    on create_procedure_cadastrarnutr
    for each row
begin
    null;
end create_procedure_cadastrar_biu;
/

create or replace trigger if_select_count_from_login_biu
    before insert or update 
    on if_select_count_from_login_whe
    for each row
begin
    null;
end if_select_count_from_login_biu;
/

create or replace trigger insert_into_login_emailsen_biu
    before insert or update 
    on insert_into_login_emailsenhanu
    for each row
begin
    null;
end insert_into_login_emailsen_biu;
/

create or replace trigger insert_into_telefones_celu_biu
    before insert or update 
    on insert_into_telefones_celularn
    for each row
begin
    null;
end insert_into_telefones_celu_biu;
/

create or replace trigger insert_into_nutricionista__biu
    before insert or update 
    on insert_into_nutricionista_nome
    for each row
begin
    null;
end insert_into_nutricionista__biu;
/


-- indexes
create index insert_into_nutricionista_n_i1 on insert_into_nutricionista_nome (begin_id);
-- load data
