<?php
    phpinfo();
?>
…or create a new repository on the command line
echo "# cursogithub2024" >> README.md
git init
git add README.md
git commit -m "first commit"
git branch -M main
git remote add origin git@github.com:JoseAlfonsoAguilar/cursogithub2024.git
git push -u origin main