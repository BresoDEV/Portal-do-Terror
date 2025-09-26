@echo off
REM ===========================================
REM Script de sincronização Git (executar na raiz do repositório)
REM Sempre mantém a versão local como final
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

REM Forçar que o histórico remoto seja sobrescrito
git reset --hard

REM Adicionar alterações locais
git add .

REM Verificar se há mudanças a commitar
git diff-index --quiet HEAD --
if errorlevel 1 (
    echo Alterações encontradas, criando commit...
    git commit -m "Sync automático pelo script .bat"
)

REM Push forçado: garante que GitHub será 100% igual ao local
git push origin %GIT_BRANCH% --force

echo ===========================================
echo Sincronização concluída! GitHub atualizado com a versão local.
echo ===========================================

pause
