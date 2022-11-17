//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

show databases;
USE sistemascriticos;
CREATE TABLE instrumento(
    codigoInstrumento int primary key,
	instID varchar (255) unique not null,
    instNorma varchar(255),
    instDescripcion varchar(255) 
);

CREATE TABLE calibracion(
	caliCodigoCalibra integer primary key not null,
    calibraInstrumento varchar (255)  not null,
    caliFrecuenCalibr integer not null,
    caliTipoPeriodo char not null
);
alter table calibracion ADD foreign key (calibraInstrumento) references  instrumento (codigoInstrumento);

CREATE TABLE reporteCali(
	codigoCalibracion integer not null,
    reporteCaliFecha date not null,
    reporteCaliHora time not null
);
CREATE TABLE testFuncional(
	testCodigoCalibra char primary key not null,
	testInsID varchar(255),
    testnormaSACodigo varchar(255),
	testFrecuenCalibr integer not null,
    testTipoPeriodo char not null
);
CREATE TABLE testFuncionalPeriodo(
	codigoTestFuncional integer not null,
	reporteTestFecha date not null,
    reporteTestHora time not null
);
CREATE TABLE normaSA(
	normaSACodigo varchar(255) primary key,
    normaDescripcion varchar(255)
);