@echo off
REM ===========================================
REM Script de sincronização Git (executar na raiz do repositório)
REM ===========================================

setlocal enabledelayedexpansion

REM Pegar pasta onde o script está
set REPO_PATH=%~dp0

cd /d "%REPO_PATH%"

echo ===========================================
echo Pasta atual: %REPO_PATH%
echo ===========================================

REM Detectar branch atual
for /f "tokens=*" %%b in ('git rev-parse --abbrev-ref HEAD') do set GIT_BRANCH=%%b

echo Branch atual: %GIT_BRANCH%

echo ===========================================
echo Atualizando do GitHub...
echo ===========================================

REM Garantir que está no branch correto
git checkout %GIT_BRANCH%

REM Baixar informações do remoto
git fetch origin

REM Trazer alterações do GitHub, mas manter os arquivos locais em caso de conflito
git pull origin %GIT_BRANCH% --strategy-option=ours

REM Adicionar alterações locais
git add .

REM Verificar se há mudanças a commitar
git diff-index --quiet HEAD --
if errorlevel 1 (
    echo Alterações encontradas, criando commit...
    git commit -m "Sync automático pelo script .bat"
    git push origin %GIT_BRANCH%
    echo ===========================================
    echo Alterações enviadas para o GitHub!
) else (
    echo Nenhuma alteração encontrada, nada a enviar.
)

echo ===========================================
echo Sincronização concluída!
echo ===========================================

pause
