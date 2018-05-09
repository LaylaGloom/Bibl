DELIMITER ;;
CREATE PROCEDURE `estadisticas`(in anio varchar(4),in mes varchar(2))
begin
declare fecha varchar(10);
#set fecha = semicolon( anio+'-'+mes+'-%');
select sum(`ingenieria_Biomedica`),
sum(`ingenieria_Biotecnologia`),
sum(`ingenieria_Software`),
sum(`ingenieria_Telematica`),
sum(`ingenieria_Financiera`),
sum(`ingenieria_Automotriz`),
sum(`ingenieria_Mecatronica`),
sum(`licenciatura_Medico`),
sum(`licenciatura_Terapia`),
sum(`maestria_Biotecnologia`),
sum(`maestria_Ciencias`),
sum(`maestria_Mecatronica`),
sum(`maestria_Tics`),
sum(`doctorado_Biotecnologia`),
sum(`especialidad_Biotecnologia`),
sum(`especialidad_Mecatronica`),
sum(`especialidad_Seguridad`),
sum(`administrativos`) 
from visits 
where date (`date_Day`) like concat(anio,'-',mes,'-','%');
end ;;
DELIMITER ;