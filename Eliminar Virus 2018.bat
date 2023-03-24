xx@echo off
title Eliminando virus...

cls
set /p usb=Cual es la unidad de la USB? ej H
cd %homedrive%
cd %windir%
@echo on
title Parando servicios y eliminando virus conocidos locales:
cls
c:

d:\
cls
echo Validando...
if %usb% == c (goto fin)

:usb
title Eliminando virus conocidos de la unidad extraible %usb% :
cd %usb%:\
%usb%:
echo %usb%

attrib /d /s -s -r -h -a *.*

REM Aplicaciones en la raiz ----> Sintaxis del /f /q /s /a Nombre_aplicacion.extension

del     /f      /q      /s      /a      AUTORUN.inf
del     /f      /q      /s      /a      *.nil
del     /f      /q      /s      /a      vpcmi.exe
del     /f      /q      /s      /a      c7706850da6cce3398177d40fa1f9a1e.exe
del     /f      /q      /s      /a      *.001
del     /f      /q      /s      /a      pkytn.exe
del     /f      /q      /s      /a      Inact.txt
del     /f      /q      /s      /a      *.db
del     /f      /q      /s      /a      *.ini
del     /f      /q      /s      /a      *.vbs
del     /f      /q      /s      /a      vgsjwawyin.vbs
del	/f	/q	/s	/a	servieca.vbs
del	/f	/q	/s	/a	9.exe
del	/f	/q	/s	/a	8585485.exe
del	/f	/q	/s	/a	
del	/f	/q	/s	/a	*.lnk
del	/f	/q	/s	/a	*.pif
del	/f	/q	/s	/a	12gn6id2.exe
del	/f	/q	/s	/a	12gn6id2.Vexe
del	/f	/q	/s	/a	abc.exe
del	/f	/q	/s	/a	autoexec.bat
del	/f	/q	/s	/a	AUtoRuN.exe
del	/f	/q	/s	/a	autorun.inf
del	/f	/q	/s	/a	autorun.inf
del	/f	/q	/s	/a	AUtoRuN.inf
del	/f	/q	/s	/a	awrvmx.exe
del	/f	/q	/s	/a	AxYl.ico
del	/f	/q	/s	/a	ayvtow.exe
del	/f	/q	/s	/a	aywq.exe
del	/f	/q	/s	/a	bexo.cmd
del	/f	/q	/s	/a	cb.exe
del	/f	/q	/s	/a	cmmae.exe
del	/f	/q	/s	/a	dgin.cmd
del	/f	/q	/s	/a	dkwo.exe
del	/f	/q	/s	/a	dmiiw.exe
del	/f	/q	/s	/a	doafauh.exe
del	/f	/q	/s	/a	doafauhx.exe
del	/f	/q	/s	/a	drive\SBCHK.exe
del	/f	/q	/s	/a	drrym.cmd
del	/f	/q	/s	/a	dsec.exe
del	/f	/q	/s	/a	dxqps.exe
del	/f	/q	/s	/a	ecglv.cmd
del	/f	/q	/s	/a	edfqtc.cmd
del	/f	/q	/s	/a	eenotx.exe
del	/f	/q	/s	/a	emwl.exe
del	/f	/q	/s	/a	eset.exe
del	/f	/q	/s	/a	eshl.exe
del	/f	/q	/s	/a	EXPLORER.exe
del	/f	/q	/s	/a	eyaaiq.exe
del	/f	/q	/s	/a	fhdih.exe
del	/f	/q	/s	/a	fjvqa.cmd
del	/f	/q	/s	/a	fk.exe
del	/f	/q	/s	/a	fote.exe
del	/f	/q	/s	/a	fun.xls.exe
del	/f	/q	/s	/a	fvabh.exe
del	/f	/q	/s	/a	gcpd.exe
del	/f	/q	/s	/a	gddcr.exe
del	/f	/q	/s	/a	ggb6w.exe
del	/f	/q	/s	/a	gnyvgj.cmd
del	/f	/q	/s	/a	grfvok.cmd
del	/f	/q	/s	/a	gvht.exe
del	/f	/q	/s	/a	gxgg.cmd
del	/f	/q	/s	/a	hapry.exe
del	/f	/q	/s	/a	hmjwv.exe
del	/f	/q	/s	/a	htxrm.exe
del	/f	/q	/s	/a	huebear.exe
del	/f	/q	/s	/a	huebearx.exe
del	/f	/q	/s	/a	HvHQ.ico
del	/f	/q	/s	/a	jFcJ.ico
del	/f	/q	/s	/a	jhnxq.cmd
del	/f	/q	/s	/a	jjyg.exe
del	/f	/q	/s	/a	JoseMario.exe
del	/f	/q	/s	/a	jrdqgd.exe
del	/f	/q	/s	/a	kavo.exe
del	/f	/q	/s	/a	khnkae.exe
del	/f	/q	/s	/a	kjatjm.cmd
del	/f	/q	/s	/a	kkwfin.exe
del	/f	/q	/s	/a	kvtul.exe
del	/f	/q	/s	/a	linaav.cmd
del	/f	/q	/s	/a	lpenfk.exe
del	/f	/q	/s	/a	lskrk.exe
del	/f	/q	/s	/a	mhfav.exe
del	/f	/q	/s	/a	mhlimx.cmd
del	/f	/q	/s	/a	mka.bat
del	/f	/q	/s	/a	myfolder\myfile.exe
del     /f      /q      /s      /a      iWoNCsMEQWPHjAp.exe
del	/f	/q	/s	/a	nbxs.cmd
del	/f	/q	/s	/a	ncga.exe
del	/f	/q	/s	/a	nchlnj.cmd
del	/f	/q	/s	/a	nduk.exe
del	/f	/q	/s	/a	newfolder.exe
del	/f	/q	/s	/a	njisfd.cmd
del	/f	/q	/s	/a	noavof.exe
del	/f	/q	/s	/a	ntdetect.exe
del	/f	/q	/s	/a	ntrun.exe
del	/f	/q	/s	/a	oaurw.exe
del	/f	/q	/s	/a	odvq.ico
del	/f	/q	/s	/a	OHDe.ico
del	/f	/q	/s	/a	pdsbla.exe
del	/f	/q	/s	/a	pejtv.exe
del	/f	/q	/s	/a	PHM.ico
del	/f	/q	/s	/a	pmdjd.exe
del	/f	/q	/s	/a	qjoe.exe
del	/f	/q	/s	/a	qmbho.cmd
del	/f	/q	/s	/a	qvgfwq.exe
del	/f	/q	/s	/a	Recycled.exe
del	/f	/q	/s	/a	rhhr.exe
del	/f	/q	/s	/a	riapoa.exe
del	/f	/q	/s	/a	riapoax.exe
del	/f	/q	/s	/a	rljs.cmd
del	/f	/q	/s	/a	salow.cmd
del	/f	/q	/s	/a	siwg.exe
del	/f	/q	/s	/a	slowh.cmd
del	/f	/q	/s	/a	smro.exe
del	/f	/q	/s	/a	sSv.ico
del	/f	/q	/s	/a	svch00k.exe
del	/f	/q	/s	/a	tclgkf.cmd
del	/f	/q	/s	/a	tKL.ico
del	/f	/q	/s	/a	tqyfd.exe
del	/f	/q	/s	/a	uidph.exe
del	/f	/q	/s	/a	uqvhje.exe
del	/f	/q	/s	/a	vakslk.exe
del	/f	/q	/s	/a	veavee.exe
del	/f	/q	/s	/a	vior.cmd
del	/f	/q	/s	/a	vreq.exe
del	/f	/q	/s	/a	BXpX.ico
del	/f	/q	/s	/a	vrIg.ico					
del	/f	/q	/s	/a	wau.ico
del	/f	/q	/s	/a	wauab.exe
del	/f	/q	/s	/a	wauefe.exe
del	/f	/q	/s	/a	wauefex.exe
del	/f	/q	/s	/a	wcxtp.exe
del	/f	/q	/s	/a	weate.exe
del	/f	/q	/s	/a	weatex.exe
del	/f	/q	/s	/a	wgvoy.exe
del	/f	/q	/s	/a	winwkh.exe
del	/f	/q	/s	/a	wosqje.cmd
del	/f	/q	/s	/a	wsctf.exe
del	/f	/q	/s	/a	wylmjr.cmd
del	/f	/q	/s	/a	x.mpeg
del	/f	/q	/s	/a	xaetnv.exe
del	/f	/q	/s	/a	xdbn.cmd
del	/f	/q	/s	/a	xfmtxx.zip
del	/f	/q	/s	/a	xmpb.exe
del	/f	/q	/s	/a	xngwkk.exe
del	/f	/q	/s	/a	xpabh.exe
del	/f	/q	/s	/a	xYm.ico
del	/f	/q	/s	/a	yiuuxoc.exe
del	/f	/q	/s	/a	yiuuxocx.exe
del	/f	/q	/s	/a	yysd.exe
del	/f	/q	/s	/a	zaudul.exe
del	/f	/q	/s	/a	zaudulx.exe
del	/f	/q	/s	/a	zypuqv.exe

REM Aplicaciones en la raiz ----> Sintaxis del /f /q /s /a Nombre_aplicacion.extension

goto fin



:fin
exit

