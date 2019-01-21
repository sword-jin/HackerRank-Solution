#!/bin/sh

while read line
do
    echo $line | cut -c 2-7
done
