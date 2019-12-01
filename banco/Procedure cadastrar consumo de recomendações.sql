-- create tables
create table create_procedure_cadastrarcons (
    in_usuarioid                   integer,
    in_tipo                        varchar2(15)
)
;

create table begin (
    update_recomendacoes           date,
    set_consumo_consumo_consumo    varchar2(4000)
)
;

create table where_usuario_idusuario_usuari (
    begin_id                       number
                                   constraint where_usuario_idus_begin_id_fk
                                   references begin on delete cascade,
    and_tipo_tipo                  varchar2(4000)
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
    on create_procedure_cadastrarcons
    for each row
begin
    null;
end create_procedure_cadastrar_biu;
/

create or replace trigger where_usuario_idusuario_us_biu
    before insert or update 
    on where_usuario_idusuario_usuari
    for each row
begin
    null;
end where_usuario_idusuario_us_biu;
/


-- indexes
create index where_usuario_idusuario_usu_i1 on where_usuario_idusuario_usuari (begin_id);
