-- create tables
create table create_procudere_cadastrausuar (
    in_enderoco                    varchar2(45),
    in_rasc                        date,
    in_sexo                        varchar2(2),
    in_medicamentos                varchar2(320),
    in_doencas                     varchar2(320),
    in_fuma                        varchar2(5),
    in_bebe                        varchar2(5),
    in_intoleranciaalimentar       varchar2(320),
    in_cbs                         varchar2(320),
    in_funcao                      varchar2(20),
    in_nutriid                     integer,
    in_email                       varchar2(30),
    in_senha                       varchar2(50),
    in_telfixo                     varchar2(15),
    in_telcel                      varchar2(15)
)
;

create table begin (
    select_max_idusuario_into      varchar2(4000),
    insert_into_telefone_fixocelul varchar2(4000)
)
;

create table insert_into_usuario_nome_ender (
    begin_id                       number
                                   constraint insert_into_usuari_begin_id_fk
                                   references begin on delete cascade,
    valeus_nome_endereco_nasc_sexo varchar2(4000)
)
;

create table insert_into_login_emailsenhaus (
    begin_id                       number
                                   constraint insert_into_login_begin_id_fk
                                   references begin on delete cascade,
    values_email_senha_iduser_3    varchar2(255)
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

create or replace trigger create_procudere_cadastrau_biu
    before insert or update 
    on create_procudere_cadastrausuar
    for each row
begin
    null;
end create_procudere_cadastrau_biu;
/

create or replace trigger insert_into_login_emailsen_biu
    before insert or update 
    on insert_into_login_emailsenhaus
    for each row
begin
    null;
end insert_into_login_emailsen_biu;
/

create or replace trigger insert_into_usuario_nome_e_biu
    before insert or update 
    on insert_into_usuario_nome_ender
    for each row
begin
    null;
end insert_into_usuario_nome_e_biu;
/


-- indexes
create index insert_into_login_emailsenh_i1 on insert_into_login_emailsenhaus (begin_id);
create index insert_into_usuario_nome_en_i1 on insert_into_usuario_nome_ender (begin_id);
