#!/bin/bash

for src in $(find . -type f); do

	grep -n 'coordenacao' $src
	if [[ $? -eq 0 ]]; then
		echo $src | tee -a log
		cp $src $src.backup
		sed 's/coordenacao/eventos-testes/g' $src > $src.novo
		mv $src.novo $src
	fi

done
