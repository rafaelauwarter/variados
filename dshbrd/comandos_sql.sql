create database basedb;

use basedb;

create table sepImp (
	ID int auto_increment primary key,
    ID_implatacao varchar(50) not null,
    Dt_implantacao timestamp default current_timestamp,
    Nome varchar(50)
);

insert into sepImp (ID_implatacao, Nome) values ('003', 'Separacao 3');

select * from sepImp;

create table sepLinha (
	ID_linha int auto_increment primary key,
    ID_implantacao varchar(50) not null,
	Arquivo varchar(50),
	unidade varchar(50),
	Erro varchar(50),
	Diferenca_Achada varchar(50),
	Desconto_Base varchar(50),
	Outros_Base varchar(50),
	Mes_Referencia varchar(50),
	Dias_Fatura varchar(50),
	Data_Emissao varchar(50),
	Total_Fatura varchar(50),
	Total_Achado varchar(50),
	Consumo_Total varchar(50),
	Consumo_Perdas varchar(50),
	Consumo_Injetado varchar(50),
	Custo_Disp varchar(50),
	Energia_Injetada varchar(50),
	Saldo_Informado_Fatura varchar(50),
	 Devolucao varchar(50),
	Outros varchar(50),
	Duplicidade varchar(50),
	Credito_Prox_Ciclo varchar(50),
	Nota_Fiscal varchar(50),
	Medidor varchar(50),
	Processo_Judicial varchar(50),
	Ocorrencia varchar(50),
	Perdas varchar(50),
	CNPJ varchar(50),
	Nome_Empresa varchar(50)
);
select * from seplinha;
insert into seplinha (
	ID_implantacao, 
	Arquivo, 
	unidade,  
	Erro,  
	Diferenca_Achada,  
	Desconto_Base,  
	Outros_Base,  
	Mes_Referencia,  
	Dias_Fatura,  
	Data_Emissao,  
	Total_Fatura,  
	Total_Achado,  
	Consumo_Total,  
	Consumo_Perdas,  
	Consumo_Injetado,  
	Custo_Disp,  
	Energia_Injetada,  
	Saldo_Informado_Fatura,  
	Devolucao,  
	Outros,  
	Duplicidade,  
	Credito_Prox_Ciclo,  
	Nota_Fiscal,  
	Medidor,  
	Processo_Judicial,  
	Ocorrencia, 
	Perdas,  
	CNPJ,  
	Nome_Empresa) 
values (
'001',
'01-202142885528186.pdf', 
'55942687', 
'0', 
'-15.33', 
'0', 
'0', 
'01/09/2021', 
'33', 
'14/09/2021', 
'547.67', 
'532.34', 
'541', 
'541', 
'0', 
'0', 
'0', 
'0', 
'0.00', 
'0.00', 
'0.00', 
'0.00', 
'144021266', 
'38048832', 
'0', 
'Diferenca referente a proporcional de bandeira hidrica.', 
'0', '40432544073292', 
'CLARO S.A.');
insert into seplinha (ID_implantacao) values ('001');