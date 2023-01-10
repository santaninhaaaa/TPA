@echo off
cls
:inicio
echo Digite o tempo em segundos para desligar:
set /p tempo = 
shutdown -s -t %tempo%
cls
echo 1-Cancelar 
echo 2-Continuar
set /p op=
cls
if %op% == 1 shutdown /a
if %op% == 2 goto aviso
:aviso
echo Sua máquina irá se desligar em %tempo%
