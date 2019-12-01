-- create tables
create table create_procedure_cadastrarreco (
    in_tipo                        varchar2(15),
    in_nutricionistaid             integer,
    in_usuarioid                   integer,
    in_data                        date,
    in_url                         varchar2(100)
)
;

create table select_max_idrecomendacoes_int (
    insert_into_recomendacoes_desc varchar2(4000),
    valeus_descricao_tipo_0_curren varchar2(4000),
    select_maxidrecomendacoes_into varchar2(4000),
    insert_into_dara_datarecomenda varchar2(4000)
)
;

create table ifselect_count (
    select_max_idrecomendacoes_int number,
    from_recomendacoes             varchar2(4000),
    where_descricao_descricao_0_th varchar2(4000)
)
;

create table the_else (
    insert_into_data_datarecomenda varchar2(4000)
)
;


-- triggers
create or replace trigger create_procedure_cadastrar_biu
    before insert or update 
    on create_procedure_cadastrarreco
    for each row
begin
    null;
end create_procedure_cadastrar_biu;
/

create or replace trigger ifselect_count_biu
    before insert or update 
    on ifselect_count
    for each row
begin
    null;
end ifselect_count_biu;
/

create or replace trigger select_max_idrecomendacoes_biu
    before insert or update 
    on select_max_idrecomendacoes_int
    for each row
begin
    null;
end select_max_idrecomendacoes_biu;
/

create or replace trigger the_else_biu
    before insert or update 
    on the_else
    for each row
begin
    null;
end the_else_biu;
/

-- load data
