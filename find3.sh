#!/bin/bash

for src in $(find . -name \*); do

	grep -n 'coordenacao' $src 1> ~/log 2>&1
	if [[ $? -eq 0 ]]; then
		echo $src
	fi

done
