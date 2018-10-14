
echo "pingpong"

git add *

echo Write your commit: 

read cmmt

echo You commit: $cmmt

git commit -m "$cmmt </> $(date +"%a, %Y-%m-%d, %H:%M:%S %Z %j")" 

git pull remty2b brny2b

#git push remty2b brny2b 
git push -f remty2b brny2b  

$SHELL