@echo off
set /p folder_name=Folder Name: 
REM Shorten making directories in one line
mkdir "%folder_name%" "%folder_name%/static"
cd %folder_name%
echo ^<!DOCTYPE html^> > index.html
echo ^<html^ lang="en"^> >> index.html
echo ^<head^> >> index.html
echo    ^<meta charset="UTF-8"^> >> index.html
echo    ^<meta name="viewport" content="width=device-width, initial-scale=1.0"^> >> index.html
echo    ^<link rel="stylesheet" href="./static/css/index.css"^> >> index.html
echo    ^<title^>Document^</title^> >> index.html
echo ^</head^> >> index.html
echo ^<body^>^ >> index.html
echo.      >> index.html
echo    ^<script src="./static/js/index.js" defer^>^</script^> >> index.html
echo ^</body^> >> index.html
echo ^</html^> >> index.html

cd static
mkdir assets css js html database
cd assets
mkdir font img music svg vid
cd ../css
echo.> index.css
cd ../js
echo.> index.js
cd ../../../

set /p ans=Delete this BAT file?:

if %ans% == y goto delete
if %ans% == Y goto delete
goto done

:delete
del Create_Structure.bat
exit

:done
exit