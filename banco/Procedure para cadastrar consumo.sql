-- create tables
create table create_procedure_cadastrarcons (
    in_modopreparo                 varchar2(15),
    in_iddietas                    integer,
    in_idalimentos                 integer,
    in_hora                        varchar2(9)
)
;

create table begin (
    select_curtine_interval_3_hour varchar2(4000)
)
;

create table if_select_count_from_cadastrod (
    begin_id                       number
                                   constraint if_select_count_fr_begin_id_fk
                                   references begin on delete cascade,
    and_alimentos_idalimentos_idal varchar2(4000)
)
;

create table insert_into_cadastrodedietas_t (
    valuesiddietas_idalientos_quan varchar2(4000)
)
;

create table the_else (
    update_cadastrodedieta_tem_ali date,
    where_cadastrodedietas_idcadst varchar2(4000),
    and_alimentos_idalimentos_idal varchar2(4000),
    end_if                         varchar2(4000),
    end_$$                         varchar2(4000)
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

create or replace trigger insert_into_cadastrodediet_biu
    before insert or update 
    on insert_into_cadastrodedietas_t
    for each row
begin
    null;
end insert_into_cadastrodediet_biu;
/

create or replace trigger the_else_biu
    before insert or update 
    on the_else
    for each row
begin
    null;
end the_else_biu;
/

create or replace trigger if_select_count_from_cadas_biu
    before insert or update 
    on if_select_count_from_cadastrod
    for each row
begin
    null;
end if_select_count_from_cadas_biu;
/


-- indexes
create index if_select_count_from_cadast_i1 on if_select_count_from_cadastrod (begin_id);
