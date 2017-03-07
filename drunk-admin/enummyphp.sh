#!/bin/bash
for N in {1..200}
do
	echo $N
	curl "http://192.168.58.101:8880/myphp.php?id=$N" > tmp
	if ! grep -q "Try harder" "tmp"; then
		cp tmp "$N.html"
		echo "http://192.168.58.101:8880/myphp.php?id=$N"
	fi
done
