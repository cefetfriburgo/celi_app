#!/bin/bash

for src in $(find . -name \*.php); do

	grep -n 'coordenacao' $src
	if [[ $? -eq 0 ]]; then
		echo $src
	fi

done
