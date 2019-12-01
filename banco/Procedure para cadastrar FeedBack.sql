-- create tables
create table create_procedure_cadastrarfeed (
    in_usuarioid                   integer,
    in_nutricionistaid             integer,
    in_tipo                        varchar2(1),
    in_datadieta_date              date
)
;

create table begin (
    insert_into_feefback_feedback_ varchar2(4000),
    valeus_feedback_current_timest varchar2(4000)
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
    on create_procedure_cadastrarfeed
    for each row
begin
    null;
end create_procedure_cadastrar_biu;
/

