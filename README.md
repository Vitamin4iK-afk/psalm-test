Run these commands to reproduce the problem with psalm cache:

`git checkout 1310f77549; vendor/bin/psalm --clear-cache; vendor/bin/psalm --threads=1; sleep 1; git checkout master; vendor/bin/psalm --threads=1`
