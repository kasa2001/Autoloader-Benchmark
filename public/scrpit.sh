#!/bin/bash

echo BlackFramework Autoloader
for f in {1..100}
	do 
		php index.php
		echo "$f"
	done

echo Composer Autoloader
for f in {1..100}
	do 
		php index2.php
		echo "$f"
	done
php count.php

echo Done
